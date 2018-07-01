<?php
/**
 * Created by PhpStorm.
 * User: Pepe
 * Date: 2018. 05. 20.
 * Time: 13:09
 */

namespace SPeter\ISPConfig\API\REST\Entity;


class WebDomain extends Base
{
    protected $params = [
        'server_id' => 1,
        'ip_address' => '*',
        'domain' => 'test2.int',
        'type' => 'vhost',
        'parent_domain_id' => 0,
        'vhost_type' => 'name',
        'hd_quota' => 0,
        'traffic_quota' => -1,
        'cgi' => 'y',
        'ssi' => 'y',
        'suexec' => 'y',
        'errordocs' => 1,
        'is_subdomainwww' => 1,
        'subdomain' => '',
        'php' => 'n',
        'ruby' => 'n',
        'redirect_type' => '',
        'redirect_path' => '',
        'ssl' => 'n',
        'ssl_state' => '',
        'ssl_locality' => '',
        'ssl_organisation' => '',
        'ssl_organisation_unit' => '',
        'ssl_country' => '',
        'ssl_domain' => '',
        'ssl_request' => '',
        'ssl_key' => '',
        'ssl_cert' => '',
        'ssl_bundle' => '',
        'ssl_action' => '',
        'stats_password' => '',
        'stats_type' => 'webalizer',
        'allow_override' => 'All',
        'apache_directives' => '',
        'php_open_basedir' => '/',
        'pm_max_requests' => 0,
        'pm_process_idle_timeout' => 10,
        'custom_php_ini' => '',
        'backup_interval' => '',
        'backup_copies' => 1,
        'active' => 'n',
        'traffic_quota_lock' => 'n',
        'http_port' => '80',
        'https_port' => '443'
    ];

    public function setPHP($handler)
    {
        $validHandlers = [
            'n', 'fast-cgi', 'php-fpm'
        ];
        if ( ! in_array($handler, $validHandlers)) {
            throw new \Exception("Invalid PHP handler specified");
        }
        $this->php = $handler;
    }

}