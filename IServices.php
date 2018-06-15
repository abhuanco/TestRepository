<?php

interface IServices
{
    public function rent();

    public function content($services, $aptitude);

    public function services($option);
}