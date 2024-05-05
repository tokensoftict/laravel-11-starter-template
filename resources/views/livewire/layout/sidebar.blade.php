<?php

use Livewire\Attributes\On;
use Livewire\Volt\Component;

new class extends Component
{

}


?>

<nav class="navbar navbar-vertical navbar-expand-lg">
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content">
            <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                <li class="nav-item">
                    <div class="nav-item-wrapper">
                        <a class="nav-link label-1" href="{{asset('') }}" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                            <span class="nav-link-icon">
                                <span data-feather="home"></span>
                            </span>
                                <span class="nav-link-text-wrapper">
                                <span class="nav-link-text">Dashboard</span>
                            </span>
                            </div>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
