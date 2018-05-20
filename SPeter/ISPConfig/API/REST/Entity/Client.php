<?php
namespace SPeter\ISPConfig\API\REST\Entity;

class Client extends Base
{
    public
        $client_id = NULL,
        $company_name,
        $contact_name,
        $customer_no,
        $vat_id,
        $street,
        $zip,
        $state,
        $country,
        $telephone,
        $mobile,
        $fax,
        $email,
        $internet,
        $icq,
        $notes,
        $default_mailserver = 1,
        $limit_maildomain = -1,
        $limit_mailbox = -1,
        $limit_mailalias = -1,
        $limit_mailalaiasdomain = -1,
        $limit_mailforward = -1,
        $limit_mailcatchall = -1,
        $limit_mailrouting = 0,
        $limit_mailfilter = -1,
        $limit_fetchmail = -1,
        $limit_mailtquota = -1,
        $limit_spamfilter_wblist = 0,
        $limit_spamfilter_user = 0,
        $limit_spamfilter_policy = 1,
        $default_webserver = 1,
        $limit_web_ip = '',
        $limit_web_domain = -1,
        $limit_web_quota = -1,
        $web_php_options = 'no,fast-cgi,cgi,mod,suphp',
        $limit_web_subdomain = -1,
        $limit_web_aliasdomain = -1,
        $limit_ftp_user = -1,
        $limit_shell_user = 0,
        $ssh_chroot = 'no,jailkit,ssh-chroot',
        $limit_webdav_user = 0,
        $default_dnsserver = 1,
        $limit_dns_zone = -1,
        $limit_dns_slave_zone = -1,
        $limit_dns_record = -1,
        $default_dbserver = 1,
        $limit_database = -1,
        $limit_cron = 0,
        $limit_cron_type = 'url',
        $limit_cron_frequency = 5,
        $limit_traffic_quota = -1,
        $limit_client = 0, // If this value is > 0, then the client is a reseller
        $parent_client_id = 0,
        $username = 'guy3',
        $password = '',
        $language = 'en',
        $usertheme = 'default',
        $template_master = 0,
        $template_additional = '',
        $created_at = 0,
        $sys_userid = 0,
        $sys_groupid = 0,
        $sys_perm_user = 0,
        $sys_perm_group = 0,
        $sys_perm_other = 0,
        $company_id = 0,
        $gender = 0,
        $contact_firstname = '',
        $city = '',
        $bank_account_owner = '',
        $bank_account_number = 0,
        $bank_code = '',
        $bank_name = '',
        $bank_account_iban = 0,
        $bank_account_swift = 0,
        $paypal_email = '',
        $mail_servers = '',
        $limit_mailaliasdomain = 0,
        $limit_mailquota = 0,
        $default_xmppservers = '',
        $xmpp_servers = '',
        $limit_xmpp_domain = 0,
        $limit_xmpp_user = 0,
        $limit_xmpp_muc = 0,
        $limit_xmpp_anon = 0,
        $limit_xmpp_auth_options = '',
        $limit_xmpp_vjud = '',
        $limit_xmpp_proxy = 0,
        $limit_xmpp_status = 0,
        $limit_xmpp_pastebin = '',
        $limit_xmpp_http_archive = '',
        $web_servers = 0,
        $limit_cgi = '',
        $limit_ssi = 0,
        $limit_perl = 0,
        $limit_ruby = 0;

    /**
     * @return int
     */
    public function getLimitRuby()
    {
        return $this->limit_ruby;
    }

    /**
     * @param int $limit_ruby
     */
    public function setLimitRuby($limit_ruby)
    {
        $this->limit_ruby = $limit_ruby;
    }

    /**
     * @return int
     */
    public function getLimitPerl()
    {
        return $this->limit_perl;
    }

    /**
     * @param int $limit_perl
     */
    public function setLimitPerl($limit_perl)
    {
        $this->limit_perl = $limit_perl;
    }

    /**
     * @return int
     */
    public function getLimitSsi()
    {
        return $this->limit_ssi;
    }

    /**
     * @param int $limit_ssi
     */
    public function setLimitSsi($limit_ssi)
    {
        $this->limit_ssi = $limit_ssi;
    }

    /**
     * @return string
     */
    public function getLimitCgi()
    {
        return $this->limit_cgi;
    }

    /**
     * @param string $limit_cgi
     */
    public function setLimitCgi($limit_cgi)
    {
        $this->limit_cgi = $limit_cgi;
    }

    /**
     * @return int
     */
    public function getWebServers()
    {
        return $this->web_servers;
    }

    /**
     * @param int $web_servers
     */
    public function setWebServers($web_servers)
    {
        $this->web_servers = $web_servers;
    }

    /**
     * @return string
     */
    public function getLimitXmppHttpArchive()
    {
        return $this->limit_xmpp_http_archive;
    }

    /**
     * @param string $limit_xmpp_http_archive
     */
    public function setLimitXmppHttpArchive($limit_xmpp_http_archive)
    {
        $this->limit_xmpp_http_archive = $limit_xmpp_http_archive;
    }

    /**
     * @return string
     */
    public function getLimitXmppPastebin()
    {
        return $this->limit_xmpp_pastebin;
    }

    /**
     * @param string $limit_xmpp_pastebin
     */
    public function setLimitXmppPastebin($limit_xmpp_pastebin)
    {
        $this->limit_xmpp_pastebin = $limit_xmpp_pastebin;
    }

    /**
     * @return int
     */
    public function getLimitXmppStatus()
    {
        return $this->limit_xmpp_status;
    }

    /**
     * @param int $limit_xmpp_status
     */
    public function setLimitXmppStatus($limit_xmpp_status)
    {
        $this->limit_xmpp_status = $limit_xmpp_status;
    }

    /**
     * @return int
     */
    public function getLimitXmppProxy()
    {
        return $this->limit_xmpp_proxy;
    }

    /**
     * @param int $limit_xmpp_proxy
     */
    public function setLimitXmppProxy($limit_xmpp_proxy)
    {
        $this->limit_xmpp_proxy = $limit_xmpp_proxy;
    }

    /**
     * @return string
     */
    public function getLimitXmppVjud()
    {
        return $this->limit_xmpp_vjud;
    }

    /**
     * @param string $limit_xmpp_vjud
     */
    public function setLimitXmppVjud($limit_xmpp_vjud)
    {
        $this->limit_xmpp_vjud = $limit_xmpp_vjud;
    }

    /**
     * @return string
     */
    public function getLimitXmppAuthOptions()
    {
        return $this->limit_xmpp_auth_options;
    }

    /**
     * @param string $limit_xmpp_auth_options
     */
    public function setLimitXmppAuthOptions($limit_xmpp_auth_options)
    {
        $this->limit_xmpp_auth_options = $limit_xmpp_auth_options;
    }

    /**
     * @return int
     */
    public function getLimitXmppAnon()
    {
        return $this->limit_xmpp_anon;
    }

    /**
     * @param int $limit_xmpp_anon
     */
    public function setLimitXmppAnon($limit_xmpp_anon)
    {
        $this->limit_xmpp_anon = $limit_xmpp_anon;
    }

    /**
     * @return int
     */
    public function getLimitXmppMuc()
    {
        return $this->limit_xmpp_muc;
    }

    /**
     * @param int $limit_xmpp_muc
     */
    public function setLimitXmppMuc($limit_xmpp_muc)
    {
        $this->limit_xmpp_muc = $limit_xmpp_muc;
    }

    /**
     * @return int
     */
    public function getLimitXmppUser()
    {
        return $this->limit_xmpp_user;
    }

    /**
     * @param int $limit_xmpp_user
     */
    public function setLimitXmppUser($limit_xmpp_user)
    {
        $this->limit_xmpp_user = $limit_xmpp_user;
    }


    /**
     * @return int
     */
    public function getLimitXmppDomain()
    {
        return $this->limit_xmpp_domain;
    }

    /**
     * @param int $limit_xmpp_domain
     */
    public function setLimitXmppDomain($limit_xmpp_domain)
    {
        $this->limit_xmpp_domain = $limit_xmpp_domain;
    }

    /**
     * @return string
     */
    public function getXmppServers()
    {
        return $this->xmpp_servers;
    }

    /**
     * @param string $xmpp_servers
     */
    public function setXmppServers($xmpp_servers)
    {
        $this->xmpp_servers = $xmpp_servers;
    }

    /**
     * @return string
     */
    public function getDefaultXmppservers()
    {
        return $this->default_xmppservers;
    }

    /**
     * @param string $default_xmppserver
     */
    public function setDefaultXmppserver($default_xmppservers)
    {
        $this->default_xmppservers = $default_xmppservers;
    }

    /**
     * @return int
     */
    public function getLimitMailquota()
    {
        return $this->limit_mailquota;
    }

    /**
     * @param int $limit_mailquota
     */
    public function setLimitMailquota($limit_mailquota)
    {
        $this->limit_mailquota = $limit_mailquota;
    }

    /**
     * @return int
     */
    public function getLimitMailaliasdomain()
    {
        return $this->limit_mailaliasdomain;
    }

    /**
     * @param int $limit_mailaliasdomain
     */
    public function setLimitMailaliasdomain($limit_mailaliasdomain)
    {
        $this->limit_mailaliasdomain = $limit_mailaliasdomain;
    }

    /**
     * @return string
     */
    public function getMailServers()
    {
        return $this->mail_servers;
    }

    /**
     * @param string $mail_servers
     */
    public function setMailServers($mail_servers)
    {
        $this->mail_servers = $mail_servers;
    }

    /**
     * @return string
     */
    public function getPaypalEmail()
    {
        return $this->paypal_email;
    }

    /**
     * @param string $paypal_email
     */
    public function setPaypalEmail($paypal_email)
    {
        $this->paypal_email = $paypal_email;
    }

    /**
     * @return int
     */
    public function getBankAccountSwift()
    {
        return $this->bank_account_swift;
    }

    /**
     * @param int $bank_account_swift
     */
    public function setBankAccountSwift($bank_account_swift)
    {
        $this->bank_account_swift = $bank_account_swift;
    }

    /**
     * @return int
     */
    public function getBankAccountIban()
    {
        return $this->bank_account_iban;
    }

    /**
     * @param int $bank_account_iban
     */
    public function setBankAccountIban($bank_account_iban)
    {
        $this->bank_account_iban = $bank_account_iban;
    }

    /**
     * @return string
     */
    public function getBankName()
    {
        return $this->bank_name;
    }

    /**
     * @param string $bank_name
     */
    public function setBankName($bank_name)
    {
        $this->bank_name = $bank_name;
    }

    /**
     * @return string
     */
    public function getBankCode()
    {
        return $this->bank_code;
    }

    /**
     * @param string $bank_code
     */
    public function setBankCode($bank_code)
    {
        $this->bank_code = $bank_code;
    }

    /**
     * @return int
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param int $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getContactFirstname()
    {
        return $this->contact_firstname;
    }

    /**
     * @param string $contact_firstname
     */
    public function setContactFirstname($contact_firstname)
    {
        $this->contact_firstname = $contact_firstname;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getBankAccountOwner()
    {
        return $this->bank_account_owner;
    }

    /**
     * @param string $bank_account_owner
     */
    public function setBankAccountOwner($bank_account_owner)
    {
        $this->bank_account_owner = $bank_account_owner;
    }

    /**
     * @return int
     */
    public function getBankAccountNumber()
    {
        return $this->bank_account_number;
    }

    /**
     * @param int $bank_account_number
     */
    public function setBankAccountNumber($bank_account_number)
    {
        $this->bank_account_number = $bank_account_number;
    }

    /**
     * @return null
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * @param null $client_id
     * @return Client
     */
    public function setClientId($client_id)
    {
        $this->client_id = $client_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCompanyName()
    {
        return $this->company_name;
    }

    /**
     * @param mixed $company_name
     * @return Client
     */
    public function setCompanyName($company_name)
    {
        $this->company_name = $company_name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContactName()
    {
        return $this->contact_name;
    }

    /**
     * @param mixed $contact_name
     * @return Client
     */
    public function setContactName($contact_name)
    {
        $this->contact_name = $contact_name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomerNo()
    {
        return $this->customer_no;
    }

    /**
     * @param mixed $customer_no
     * @return Client
     */
    public function setCustomerNo($customer_no)
    {
        $this->customer_no = $customer_no;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVatId()
    {
        return $this->vat_id;
    }

    /**
     * @param mixed $vat_id
     * @return Client
     */
    public function setVatId($vat_id)
    {
        $this->vat_id = $vat_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     * @return Client
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param mixed $zip
     * @return Client
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     * @return Client
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     * @return Client
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     * @return Client
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param mixed $mobile
     * @return Client
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param mixed $fax
     * @return Client
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     * @return Client
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInternet()
    {
        return $this->internet;
    }

    /**
     * @param mixed $internet
     * @return Client
     */
    public function setInternet($internet)
    {
        $this->internet = $internet;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIcq()
    {
        return $this->icq;
    }

    /**
     * @param mixed $icq
     * @return Client
     */
    public function setIcq($icq)
    {
        $this->icq = $icq;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param mixed $notes
     * @return Client
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * @return int
     */
    public function getDefaultMailserver()
    {
        return $this->default_mailserver;
    }

    /**
     * @param int $default_mailserver
     * @return Client
     */
    public function setDefaultMailserver($default_mailserver)
    {
        $this->default_mailserver = $default_mailserver;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitMaildomain()
    {
        return $this->limit_maildomain;
    }

    /**
     * @param int $limit_maildomain
     * @return Client
     */
    public function setLimitMaildomain($limit_maildomain)
    {
        $this->limit_maildomain = $limit_maildomain;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitMailbox()
    {
        return $this->limit_mailbox;
    }

    /**
     * @param int $limit_mailbox
     * @return Client
     */
    public function setLimitMailbox($limit_mailbox)
    {
        $this->limit_mailbox = $limit_mailbox;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitMailalias()
    {
        return $this->limit_mailalias;
    }

    /**
     * @param int $limit_mailalias
     * @return Client
     */
    public function setLimitMailalias($limit_mailalias)
    {
        $this->limit_mailalias = $limit_mailalias;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitMailalaiasdomain()
    {
        return $this->limit_mailalaiasdomain;
    }

    /**
     * @param int $limit_mailalaiasdomain
     * @return Client
     */
    public function setLimitMailalaiasdomain($limit_mailalaiasdomain)
    {
        $this->limit_mailalaiasdomain = $limit_mailalaiasdomain;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitMailforward()
    {
        return $this->limit_mailforward;
    }

    /**
     * @param int $limit_mailforward
     * @return Client
     */
    public function setLimitMailforward($limit_mailforward)
    {
        $this->limit_mailforward = $limit_mailforward;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitMailcatchall()
    {
        return $this->limit_mailcatchall;
    }

    /**
     * @param int $limit_mailcatchall
     * @return Client
     */
    public function setLimitMailcatchall($limit_mailcatchall)
    {
        $this->limit_mailcatchall = $limit_mailcatchall;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitMailrouting()
    {
        return $this->limit_mailrouting;
    }

    /**
     * @param int $limit_mailrouting
     * @return Client
     */
    public function setLimitMailrouting($limit_mailrouting)
    {
        $this->limit_mailrouting = $limit_mailrouting;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitMailfilter()
    {
        return $this->limit_mailfilter;
    }

    /**
     * @param int $limit_mailfilter
     * @return Client
     */
    public function setLimitMailfilter($limit_mailfilter)
    {
        $this->limit_mailfilter = $limit_mailfilter;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitFetchmail()
    {
        return $this->limit_fetchmail;
    }

    /**
     * @param int $limit_fetchmail
     * @return Client
     */
    public function setLimitFetchmail($limit_fetchmail)
    {
        $this->limit_fetchmail = $limit_fetchmail;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitMailtquota()
    {
        return $this->limit_mailtquota;
    }

    /**
     * @param int $limit_mailtquota
     * @return Client
     */
    public function setLimitMailtquota($limit_mailtquota)
    {
        $this->limit_mailtquota = $limit_mailtquota;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitSpamfilterWblist()
    {
        return $this->limit_spamfilter_wblist;
    }

    /**
     * @param int $limit_spamfilter_wblist
     * @return Client
     */
    public function setLimitSpamfilterWblist($limit_spamfilter_wblist)
    {
        $this->limit_spamfilter_wblist = $limit_spamfilter_wblist;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitSpamfilterUser()
    {
        return $this->limit_spamfilter_user;
    }

    /**
     * @param int $limit_spamfilter_user
     * @return Client
     */
    public function setLimitSpamfilterUser($limit_spamfilter_user)
    {
        $this->limit_spamfilter_user = $limit_spamfilter_user;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitSpamfilterPolicy()
    {
        return $this->limit_spamfilter_policy;
    }

    /**
     * @param int $limit_spamfilter_policy
     * @return Client
     */
    public function setLimitSpamfilterPolicy($limit_spamfilter_policy)
    {
        $this->limit_spamfilter_policy = $limit_spamfilter_policy;
        return $this;
    }

    /**
     * @return int
     */
    public function getDefaultWebserver()
    {
        return $this->default_webserver;
    }

    /**
     * @param int $default_webserver
     * @return Client
     */
    public function setDefaultWebserver($default_webserver)
    {
        $this->default_webserver = $default_webserver;
        return $this;
    }

    /**
     * @return string
     */
    public function getLimitWebIp()
    {
        return $this->limit_web_ip;
    }

    /**
     * @param string $limit_web_ip
     * @return Client
     */
    public function setLimitWebIp($limit_web_ip)
    {
        $this->limit_web_ip = $limit_web_ip;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitWebDomain()
    {
        return $this->limit_web_domain;
    }

    /**
     * @param int $limit_web_domain
     * @return Client
     */
    public function setLimitWebDomain($limit_web_domain)
    {
        $this->limit_web_domain = $limit_web_domain;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitWebQuota()
    {
        return $this->limit_web_quota;
    }

    /**
     * @param int $limit_web_quota
     * @return Client
     */
    public function setLimitWebQuota($limit_web_quota)
    {
        $this->limit_web_quota = $limit_web_quota;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebPhpOptions()
    {
        return $this->web_php_options;
    }

    /**
     * @param string $web_php_options
     * @return Client
     */
    public function setWebPhpOptions($web_php_options)
    {
        $this->web_php_options = $web_php_options;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitWebSubdomain()
    {
        return $this->limit_web_subdomain;
    }

    /**
     * @param int $limit_web_subdomain
     * @return Client
     */
    public function setLimitWebSubdomain($limit_web_subdomain)
    {
        $this->limit_web_subdomain = $limit_web_subdomain;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitWebAliasdomain()
    {
        return $this->limit_web_aliasdomain;
    }

    /**
     * @param int $limit_web_aliasdomain
     * @return Client
     */
    public function setLimitWebAliasdomain($limit_web_aliasdomain)
    {
        $this->limit_web_aliasdomain = $limit_web_aliasdomain;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitFtpUser()
    {
        return $this->limit_ftp_user;
    }

    /**
     * @param int $limit_ftp_user
     * @return Client
     */
    public function setLimitFtpUser($limit_ftp_user)
    {
        $this->limit_ftp_user = $limit_ftp_user;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitShellUser()
    {
        return $this->limit_shell_user;
    }

    /**
     * @param int $limit_shell_user
     * @return Client
     */
    public function setLimitShellUser($limit_shell_user)
    {
        $this->limit_shell_user = $limit_shell_user;
        return $this;
    }

    /**
     * @return string
     */
    public function getSshChroot()
    {
        return $this->ssh_chroot;
    }

    /**
     * @param string $ssh_chroot
     * @return Client
     */
    public function setSshChroot($ssh_chroot)
    {
        $this->ssh_chroot = $ssh_chroot;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitWebdavUser()
    {
        return $this->limit_webdav_user;
    }

    /**
     * @param int $limit_webdav_user
     * @return Client
     */
    public function setLimitWebdavUser($limit_webdav_user)
    {
        $this->limit_webdav_user = $limit_webdav_user;
        return $this;
    }

    /**
     * @return int
     */
    public function getDefaultDnsserver()
    {
        return $this->default_dnsserver;
    }

    /**
     * @param int $default_dnsserver
     * @return Client
     */
    public function setDefaultDnsserver($default_dnsserver)
    {
        $this->default_dnsserver = $default_dnsserver;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitDnsZone()
    {
        return $this->limit_dns_zone;
    }

    /**
     * @param int $limit_dns_zone
     * @return Client
     */
    public function setLimitDnsZone($limit_dns_zone)
    {
        $this->limit_dns_zone = $limit_dns_zone;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitDnsSlaveZone()
    {
        return $this->limit_dns_slave_zone;
    }

    /**
     * @param int $limit_dns_slave_zone
     * @return Client
     */
    public function setLimitDnsSlaveZone($limit_dns_slave_zone)
    {
        $this->limit_dns_slave_zone = $limit_dns_slave_zone;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitDnsRecord()
    {
        return $this->limit_dns_record;
    }

    /**
     * @param int $limit_dns_record
     * @return Client
     */
    public function setLimitDnsRecord($limit_dns_record)
    {
        $this->limit_dns_record = $limit_dns_record;
        return $this;
    }

    /**
     * @return int
     */
    public function getDefaultDbserver()
    {
        return $this->default_dbserver;
    }

    /**
     * @param int $default_dbserver
     * @return Client
     */
    public function setDefaultDbserver($default_dbserver)
    {
        $this->default_dbserver = $default_dbserver;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitDatabase()
    {
        return $this->limit_database;
    }

    /**
     * @param int $limit_database
     * @return Client
     */
    public function setLimitDatabase($limit_database)
    {
        $this->limit_database = $limit_database;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitCron()
    {
        return $this->limit_cron;
    }

    /**
     * @param int $limit_cron
     * @return Client
     */
    public function setLimitCron($limit_cron)
    {
        $this->limit_cron = $limit_cron;
        return $this;
    }

    /**
     * @return string
     */
    public function getLimitCronType()
    {
        return $this->limit_cron_type;
    }

    /**
     * @param string $limit_cron_type
     * @return Client
     */
    public function setLimitCronType($limit_cron_type)
    {
        $this->limit_cron_type = $limit_cron_type;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitCronFrequency()
    {
        return $this->limit_cron_frequency;
    }

    /**
     * @param int $limit_cron_frequency
     * @return Client
     */
    public function setLimitCronFrequency($limit_cron_frequency)
    {
        $this->limit_cron_frequency = $limit_cron_frequency;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitTrafficQuota()
    {
        return $this->limit_traffic_quota;
    }

    /**
     * @param int $limit_traffic_quota
     * @return Client
     */
    public function setLimitTrafficQuota($limit_traffic_quota)
    {
        $this->limit_traffic_quota = $limit_traffic_quota;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimitClient()
    {
        return $this->limit_client;
    }

    /**
     * @param int $limit_client
     * @return Client
     */
    public function setLimitClient($limit_client)
    {
        $this->limit_client = $limit_client;
        return $this;
    }

    /**
     * @return int
     */
    public function getParentClientId()
    {
        return $this->parent_client_id;
    }

    /**
     * @param int $parent_client_id
     * @return Client
     */
    public function setParentClientId($parent_client_id)
    {
        $this->parent_client_id = $parent_client_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return Client
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return Client
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return Client
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsertheme()
    {
        return $this->usertheme;
    }

    /**
     * @param string $usertheme
     * @return Client
     */
    public function setUsertheme($usertheme)
    {
        $this->usertheme = $usertheme;
        return $this;
    }

    /**
     * @return int
     */
    public function getTemplateMaster()
    {
        return $this->template_master;
    }

    /**
     * @param int $template_master
     * @return Client
     */
    public function setTemplateMaster($template_master)
    {
        $this->template_master = $template_master;
        return $this;
    }

    /**
     * @return string
     */
    public function getTemplateAdditional()
    {
        return $this->template_additional;
    }

    /**
     * @param string $template_additional
     * @return Client
     */
    public function setTemplateAdditional($template_additional)
    {
        $this->template_additional = $template_additional;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param int $created_at
     * @return Client
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * @return int
     */
    public function getSysUserid()
    {
        return $this->sys_userid;
    }

    /**
     * @param int $sys_userid
     * @return Client
     */
    public function setSysUserid($sys_userid)
    {
        $this->sys_userid = $sys_userid;
        return $this;
    }

    /**
     * @return int
     */
    public function getSysGroupid()
    {
        return $this->sys_groupid;
    }

    /**
     * @param int $sys_groupid
     * @return Client
     */
    public function setSysGroupid($sys_groupid)
    {
        $this->sys_groupid = $sys_groupid;
        return $this;
    }

    /**
     * @return int
     */
    public function getSysPermUser()
    {
        return $this->sys_perm_user;
    }

    /**
     * @param int $sys_perm_user
     * @return Client
     */
    public function setSysPermUser($sys_perm_user)
    {
        $this->sys_perm_user = $sys_perm_user;
        return $this;
    }

    /**
     * @return int
     */
    public function getSysPermGroup()
    {
        return $this->sys_perm_group;
    }

    /**
     * @param int $sys_perm_group
     * @return Client
     */
    public function setSysPermGroup($sys_perm_group)
    {
        $this->sys_perm_group = $sys_perm_group;
        return $this;
    }

    /**
     * @return int
     */
    public function getSysPermOther()
    {
        return $this->sys_perm_other;
    }

    /**
     * @param int $sys_perm_other
     * @return Client
     */
    public function setSysPermOther($sys_perm_other)
    {
        $this->sys_perm_other = $sys_perm_other;
        return $this;
    }

    /**
     * @return int
     */
    public function getCompanyId()
    {
        return $this->company_id;
    }

    /**
     * @param int $company_id
     * @return Client
     */
    public function setCompanyId($company_id)
    {
        $this->company_id = $company_id;
        return $this;
    }




}