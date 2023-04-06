<?php

namespace DesignPatterns\Behavioral\Mediator;

class User
{
    private string $userName;
    private string $userInfo;

    /**
     * @param string $userName
     * @param string $userInfo
     */
    public function __construct(string $userName, string $userInfo)
    {
        $this->userName = $userName;
        $this->userInfo = $userInfo;
    }


    /**
     * @return String
     */
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * @param String $userName
     */
    public function setUserName(string $userName): void
    {
        $this->userName = $userName;
    }

    /**
     * @return string
     */
    public function getUserInfo(): string
    {
        return $this->userInfo;
    }

    /**
     * @param string $userInfo
     */
    public function setUserInfo(string $userInfo): void
    {
        $this->userInfo = $userInfo;
    }



}