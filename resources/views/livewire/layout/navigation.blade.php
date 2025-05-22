<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
    public function profile(): void
    {
        $this->redirect(route('profile'), navigate: true);
    }
}; ?>
  <header>
    <!-- Navbar -->
     <nav id="mainNavbar" class="navbar navbar-expand-lg navbar-custom px-3 pt-4 ">
            <div class="container d-flex justify-content-between align-items-center">
                <!-- Left: Logo -->
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="./assets/images/logo/logo-dark.png" alt="Logo" class="me-2" width="200">

                </a>

                <!-- Center Menu (Desktop) -->
                <div class="navbar-middle d-none d-md-flex gap-4">
                    <a href="#" class="text-dark text-decoration-none py-3 active-link">Overview</a>
                    <!-- <a href="#" class="text-dark text-decoration-none py-3">Rates</a> -->
                    <a href="#" class="text-dark text-decoration-none py-2"><select
                            class="form-select border-0 shadow-none" aria-label="Default select example">
                            <option selected><a href="rates.html" class="">Rates</a></option>
                            <option value="1"><a href="#" class="">Strategy </a></option>
                            <option value="2"><a href="#" class="">Events </a></option>
                            <option value="3"><a href="#" class="">Parity</a></option>
                            <option value="4"><a href="#" class="">Ranking </a></option>
                        </select></a>
                </div>

                <!-- Right Buttons + Sidebar Toggle -->
                <div class="d-flex gap-2 align-items-center">


                    <!-- Icon Buttons -->
                    <x-nav-btn wire:click="profile" class="bi bi-person-circle"></x-nav-btn>
                    <x-nav-btn class="bi bi-gear-fill"></x-nav-btn>
                    <x-nav-btn wire:click="logout" class="bi bi-box-arrow-right"></x-nav-btn>
                    <!-- Toggle Sidebar on Mobile -->
                    <button class="nav-icon-btn d-md-none " type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#mobileMenu">
                        <i class="bi bi-list "></i>
                    </button>
                </div>
            </div>
        </nav>

    <div id="navPlaceholder" class="placeholder d-none"></div>
    <!-- Filter Bar -->
    < x-filter />

  </header>
