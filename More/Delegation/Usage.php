<?php

namespace DesignPatterns\More\Delegation;

// instantiate TeamLead and appoint to assistants JuniorDeveloper
$teamLead = new TeamLead(new JuniorDeveloper());

// team lead delegate write code to junior developer
echo $teamLead->writeCode();
