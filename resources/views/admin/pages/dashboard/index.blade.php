@extends('admin.layouts.main-layout',["tabTitle" => config('i.service_name')." | Dashboard" ])
@section('page')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
        <div>
            <h2 class="dashboard-title mb-1">Dashboard</h2>
            <p class="dashboard-subtitle mb-0">
                Laundry Service Management Overview
            </p>
        </div>

        <a href="#" class="btn btn-primary rounded-pill px-4 py-2">
            <i class="fa-solid fa-plus me-2"></i>
            New Order
        </a>
    </div>
    <div class="row g-4">

        <!-- Today Orders -->
        <div class="col-md-6 col-xl-4">
            <a href="today-orders.html" class="card-link">
                <div class="card dashboard-card shadow-sm">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h6>Today Orders</h6>
                            <h2>124</h2>
                        </div>

                        <div class="icon-box bg-primary-soft">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Pending Orders -->
        <div class="col-md-6 col-xl-4">
            <a href="pending-orders.html" class="card-link">
                <div class="card dashboard-card shadow-sm">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h6>Pending Orders</h6>
                            <h2>39</h2>
                        </div>

                        <div class="icon-box bg-warning-soft">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Ready Orders -->
        <div class="col-md-6 col-xl-4">
            <a href="ready-orders.html" class="card-link">
                <div class="card dashboard-card shadow-sm">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h6>Ready Orders</h6>
                            <h2>56</h2>
                        </div>

                        <div class="icon-box bg-success-soft">
                            <i class="fa-solid fa-circle-check"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Delivered Orders -->
        <div class="col-md-6 col-xl-4">
            <a href="delivered-orders.html" class="card-link">
                <div class="card dashboard-card shadow-sm">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h6>Delivered Orders</h6>
                            <h2>312</h2>
                        </div>

                        <div class="icon-box bg-info-soft">
                            <i class="fa-solid fa-truck"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Daily Income -->
        <div class="col-md-6 col-xl-4">
            <a href="daily-income.html" class="card-link">
                <div class="card dashboard-card shadow-sm">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h6>Daily Income</h6>
                            <h2>৳ 12,450</h2>
                        </div>

                        <div class="icon-box bg-dark-soft">
                            <i class="fa-solid fa-money-bill-wave"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Monthly Income -->
        <div class="col-md-6 col-xl-4">
            <a href="monthly-income.html" class="card-link">
                <div class="card dashboard-card shadow-sm">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h6>Monthly Income</h6>
                            <h2>৳ 3,24,000</h2>
                        </div>

                        <div class="icon-box bg-danger-soft">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>
</div>
@endsection
