<?php

namespace KamranKhosa\LaravelVoipnow\Interface;
interface ConnectorInterface
{
    public function connect(array $config);
}