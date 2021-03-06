<?php
/**
 * Created by PhpStorm.
 * User: psa
 * Date: 16/09/17
 * Time: 09:00
 */

namespace AppBundle\Service;

/**
 * Class Admin
 *
 * @package AppBundle\Service
 */
class AdminService
{

    /**
     * Admin dashboard breadcrumb
     *
     * @return array
     */
    public function getHomeBreadcrumb()
    {
        $breadcrumb = [
            [
                'href' => 'admin_homepage',
                'text' => 'Accueil'
            ],
            [
                'href' => 'admin_homepage',
                'text' => 'Administration'
            ],
        ];
        return $breadcrumb;
    }
}

