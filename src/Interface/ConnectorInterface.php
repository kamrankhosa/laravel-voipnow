<?php

namespace KamranKhosa\VoipNow\Interface;
interface ConnectorInterface
{
    public function connect(array $config);
}