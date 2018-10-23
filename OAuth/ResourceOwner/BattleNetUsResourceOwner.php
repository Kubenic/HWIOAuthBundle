<?php

/*
 * This file is part of the HWIOAuthBundle package.
 *
 * (c) Hardware.Info <opensource@hardware.info>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HWI\Bundle\OAuthBundle\OAuth\ResourceOwner;

use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * BattleNetEuResourceOwner.
 *
 * @author Jordan Venant <jordan.venant@gmail.com>
 */
class BattleNetUsResourceOwner extends GenericOAuth1ResourceOwner
{
    /**
     * {@inheritdoc}
     */
    protected $paths = array(
        'identifier' => 'user.username',
        'nickname' => 'user.username',
        'realname' => 'user.display_name',
        'profilepicture' => 'user.avatar',
    );

    /**
     * {@inheritdoc}
     */
    protected function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults(array(
            'authorization_url' => 'https://us.battle.net/oauth/authorize',
            'access_token_url' => 'https://us.battle.net/oauth/token',
            'infos_url' => 'https://us.battle.net/oauth/userinfo',
            'scope' => 'wow.profile'
        ));
    }
}
