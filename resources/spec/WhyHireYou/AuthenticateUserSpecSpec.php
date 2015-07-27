<?php

namespace spec\App\spec\WhyHireYou;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\UserProvider;
use App\AuthenticateUser;
use App\AuthenticateUserListener;
use App\Repositories\UserRepository;
use Laravel\Socialite\Contracts\Factory;
use Laravel\Socialite\Two\ProviderInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AuthenticateUserSpecSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('App\spec\WhyHireYou\AuthenticateUserSpec');
    }

    const HAS_CODE = true;

    const HAS_NO_CODE = false;

    function let(UserRepository $users, Factory $socialite, Guard $auth)
    {
        $this->beConstructedWith($users, $socialite, $auth);
    }

    function it_authorizes_a_user(
        Factory $socialite,
        ProviderInterface $providers,
        AuthenticateUserListener $listener
    )
    {
        $providers->redirect()->shouldBeCalled();
        $socialite->driver('github')->willReturn($providers);

        $this->executes(self::HAS_NO_CODE, $listener);
    }

    function it_creates_a_user_if_authorization_is_granted(
        Factory $socialite,
        UserRepository $users,
        Guard $auth,
        UserProvider $user,
        AuthenticateUserListener $listener
    )
    {
    	$provider = 'github';
        $socialite->driver($provider)->willReturn(new ProviderStub);
        $users->findByEmailOrCreate(ProviderStub::$data)->willReturn($user);
        $auth->login($user, self::HAS_CODE)->shouldBeCalled();
        $listener->userHasLoggedIn($user)->shouldBeCalled();

        $this->executes(self::HAS_CODE, $listener);
    }
}

class ProviderStub {
    public static $data = [
        'id' => 1,
        'nickname' => 'foo',
        'name' => 'John Doe',
        'email' => 'john@example.com',
        'avatar' => 'foo.jpg'
    ];

    public function user()
    {
        return self::$data;
    }
}
