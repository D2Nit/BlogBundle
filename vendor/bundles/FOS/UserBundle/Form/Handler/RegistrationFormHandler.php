<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\UserBundle\Form\Handler;

use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Model\UserManagerInterface;
use FOS\UserBundle\Mailer\MailerInterface;

class RegistrationFormHandler
{
    protected $request;
    protected $userManager;
    protected $form;
    protected $mailer;

    public function __construct(Form $form, Request $request, UserManagerInterface $userManager, MailerInterface $mailer)
    {
        $this->form = $form;
        $this->request = $request;
        $this->userManager = $userManager;
        $this->mailer = $mailer;
    }

    public function process($confirmation = null)
    {
        $user = $this->userManager->createUser();
        $this->form->setData($user);

        if ('POST' == $this->request->getMethod()) {
            $this->form->bindRequest($this->request);

            if ($this->form->isValid()) {
                if (true === $confirmation) {
                    $user->setEnabled(false);
                    $this->mailer->sendConfirmationEmailMessage($user);
                } else if (false === $confirmation) {
                    $user->setConfirmationToken(null);
                    $user->setEnabled(true);
                }

                $this->userManager->updateUser($user);

                return true;
            }
        }

        return false;
    }
}
