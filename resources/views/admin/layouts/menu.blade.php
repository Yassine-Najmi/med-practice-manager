<ul class="side-menu">
    <li class="slide">
        <a class="side-menu__item" href={{ route('admin.index') }}><svg xmlns="http://www.w3.org/2000/svg"
                class="side-menu__icon" viewBox="0 0 22 22">

                <path
                    d="M12,3L2,12H5V20H19V12H22L12,3M12,8.75A2.25,2.25 0 0,1 14.25,11A2.25,2.25 0 0,1 12,13.25A2.25,2.25 0 0,1 9.75,11A2.25,2.25 0 0,1 12,8.75M12,15C13.5,15 16.5,15.75 16.5,17.25V18H7.5V17.25C7.5,15.75 10.5,15 12,15Z" />
            </svg><span class="side-menu__label">Dashboard</span><span class="badge badge-success side-badge"></span></a>
    </li>
    <li class="slide">
        <a class="side-menu__item" href="{{ route('admin.patient.index') }}"><svg xmlns="http://www.w3.org/2000/svg"
                class="side-menu__icon" viewBox="0 0 24 24">
                <path
                    d="M8 6C8 3.79 9.79 2 12 2S16 3.79 16 6 14.21 10 12 10 8 8.21 8 6M17 22H18C19.1 22 20 21.1 20 20V15.22C20 14.1 19.39 13.07 18.39 12.56C17.96 12.34 17.5 12.13 17 11.94V22M12.34 17L15 11.33C14.07 11.12 13.07 11 12 11C9.47 11 7.29 11.7 5.61 12.56C4.61 13.07 4 14.1 4 15.22V22H6.34C6.12 21.55 6 21.04 6 20.5C6 18.57 7.57 17 9.5 17H12.34M10 22L11.41 19H9.5C8.67 19 8 19.67 8 20.5S8.67 22 9.5 22H10Z" />
            </svg><span class="side-menu__label">Patients</span><span
                class="badge badge-success side-badge">{{ $Patient_count }}</span></a>

    </li>
    <li class="slide">
        <a class="side-menu__item" href="{{ route('admin.appointments.index') }}"><svg
                xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                <path
                    d="M12 9C14 9 15 11.42 13.59 12.84C12.17 14.26 9.75 13.25 9.75 11.25C9.75 10 10.75 9 12 9M16.5 18H7.5V16.88C7.5 15.63 9.5 14.63 12 14.63S16.5 15.63 16.5 16.88M19 19H5V8H19M16 1V3H8V1H6V3H5C3.9 3 3 3.9 3 5V19C3 20.11 3.9 21 5 21H19C20.11 21 21 20.11 21 19V5C21 3.9 20.11 3 19 3H18V1H16Z" />
            </svg><span class="side-menu__label">Rendez-vous</span><span
                class="badge badge-success side-badge">{{ $Appointment_count }}</span></a>
    </li>
    <li class="slide">
        <a class="side-menu__item" href="{{ route('admin.business-hours.index') }}"><svg
                xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                <path
                    d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12S17.5 2 12 2M7.7 15.5L7 14.2L11 11.9V7H12.5V12.8L7.7 15.5Z" />
            </svg><span class="side-menu__label">Heures du travail</span></a>
    </li>
    <li class="slide">
        <a class="side-menu__item" href="{{ route('admin.consultation.index') }}"><svg
                xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                <path
                    d="M4,2H20A2,2 0 0,1 22,4V16A2,2 0 0,1 20,18H13.9L10.2,21.71C10,21.9 9.75,22 9.5,22V22H9A1,1 0 0,1 8,21V18H4A2,2 0 0,1 2,16V4C2,2.89 2.9,2 4,2M12.19,5.5C11.3,5.5 10.59,5.68 10.05,6.04C9.5,6.4 9.22,7 9.27,7.69H11.24C11.24,7.41 11.34,7.2 11.5,7.06C11.7,6.92 11.92,6.85 12.19,6.85C12.5,6.85 12.77,6.93 12.95,7.11C13.13,7.28 13.22,7.5 13.22,7.8C13.22,8.08 13.14,8.33 13,8.54C12.83,8.76 12.62,8.94 12.36,9.08C11.84,9.4 11.5,9.68 11.29,9.92C11.1,10.16 11,10.5 11,11H13C13,10.72 13.05,10.5 13.14,10.32C13.23,10.15 13.4,10 13.66,9.85C14.12,9.64 14.5,9.36 14.79,9C15.08,8.63 15.23,8.24 15.23,7.8C15.23,7.1 14.96,6.54 14.42,6.12C13.88,5.71 13.13,5.5 12.19,5.5M11,12V14H13V12H11Z" />
            </svg><span class="side-menu__label">Consultation</span><span
                class="badge badge-success side-badge">{{ $ConsultationCount }}</span></a>
    </li>
    <li class="slide">
        <a class="side-menu__item" href="{{ route('admin.employee.index') }}"><svg xmlns="http://www.w3.org/2000/svg"
                class="side-menu__icon" viewBox="0 0 24 24">
                <path
                    d="M12,5.5A3.5,3.5 0 0,1 15.5,9A3.5,3.5 0 0,1 12,12.5A3.5,3.5 0 0,1 8.5,9A3.5,3.5 0 0,1 12,5.5M5,8C5.56,8 6.08,8.15 6.53,8.42C6.38,9.85 6.8,11.27 7.66,12.38C7.16,13.34 6.16,14 5,14A3,3 0 0,1 2,11A3,3 0 0,1 5,8M19,8A3,3 0 0,1 22,11A3,3 0 0,1 19,14C17.84,14 16.84,13.34 16.34,12.38C17.2,11.27 17.62,9.85 17.47,8.42C17.92,8.15 18.44,8 19,8M5.5,18.25C5.5,16.18 8.41,14.5 12,14.5C15.59,14.5 18.5,16.18 18.5,18.25V20H5.5V18.25M0,20V18.5C0,17.11 1.89,15.94 4.45,15.6C3.86,16.28 3.5,17.22 3.5,18.25V20H0M24,20H20.5V18.25C20.5,17.22 20.14,16.28 19.55,15.6C22.11,15.94 24,17.11 24,18.5V20Z" />
            </svg><span class="side-menu__label">Employees</span><span
                class="badge badge-success side-badge">{{ $Employee_count }}</span></a>

    </li>
    <li class="slide">
        <a class="side-menu__item" href="{{ route('admin.fournisseur.index') }}"><svg class="side-menu__icon"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                    d="M18.72,14.76C19.07,13.91 19.26,13 19.26,12C19.26,11.28 19.15,10.59 18.96,9.95C18.31,10.1 17.63,10.18 16.92,10.18C13.86,10.18 11.15,8.67 9.5,6.34C8.61,8.5 6.91,10.26 4.77,11.22C4.73,11.47 4.73,11.74 4.73,12A7.27,7.27 0 0,0 12,19.27C13.05,19.27 14.06,19.04 14.97,18.63C15.54,19.72 15.8,20.26 15.78,20.26C14.14,20.81 12.87,21.08 12,21.08C9.58,21.08 7.27,20.13 5.57,18.42C4.53,17.38 3.76,16.11 3.33,14.73H2V10.18H3.09C3.93,6.04 7.6,2.92 12,2.92C14.4,2.92 16.71,3.87 18.42,5.58C19.69,6.84 20.54,8.45 20.89,10.18H22V14.67H22V14.69L22,14.73H21.94L18.38,18L13.08,17.4V15.73H17.91L18.72,14.76M9.27,11.77C9.57,11.77 9.86,11.89 10.07,12.11C10.28,12.32 10.4,12.61 10.4,12.91C10.4,13.21 10.28,13.5 10.07,13.71C9.86,13.92 9.57,14.04 9.27,14.04C8.64,14.04 8.13,13.54 8.13,12.91C8.13,12.28 8.64,11.77 9.27,11.77M14.72,11.77C15.35,11.77 15.85,12.28 15.85,12.91C15.85,13.54 15.35,14.04 14.72,14.04C14.09,14.04 13.58,13.54 13.58,12.91A1.14,1.14 0 0,1 14.72,11.77Z" />
            </svg><span class="side-menu__label">Fournisseurs</span><span
                class="badge badge-success side-badge">{{ $Fournisseur_count }}</span></a>
    </li>

    <li class="slide">
        <a class="side-menu__item" href="{{ route('admin.stock.index') }}"><svg xmlns="http://www.w3.org/2000/svg"
                class="side-menu__icon" viewBox="0 0 24 24">
                <path
                    d="M17,18C15.89,18 15,18.89 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20C19,18.89 18.1,18 17,18M1,2V4H3L6.6,11.59L5.24,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42A0.25,0.25 0 0,1 7.17,14.75C7.17,14.7 7.18,14.66 7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.58 17.3,11.97L20.88,5.5C20.95,5.34 21,5.17 21,5A1,1 0 0,0 20,4H5.21L4.27,2M7,18C5.89,18 5,18.89 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20C9,18.89 8.1,18 7,18Z" />
            </svg><span class="side-menu__label">Stock</span><span
                class="badge badge-success side-badge">{{ $Stock_count }}</span></a>
    </li>
    {{-- <li class="side-item side-item-category">General</li>
    <li class="slide">
        <a class="side-menu__item" data-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg"
                class="side-menu__icon" viewBox="0 0 24 24">
                <path d="M0 0h24v24H0V0z" fill="none" />
                <path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3" />
                <path
                    d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z" />
            </svg><span class="side-menu__label">Sections</span><i class="angle fe fe-chevron-down"></i></a>
        <ul class="slide-menu">
            <li><a class="slide-item" href="">Sections</a></li>
            <li><a class="slide-item" href="chart-chartjs.html">ChartJS</a></li>
            <li><a class="slide-item" href="chart-echart.html">Echart</a></li>
            <li><a class="slide-item" href="chart-sparkline.html">Sparkline</a></li>
            <li><a class="slide-item" href="chart-peity.html">Chart-peity</a></li>
        </ul>
    </li>
    <li class="slide">
        <a class="side-menu__item" data-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg"
                class="side-menu__icon" viewBox="0 0 24 24">
                <path d="M0 0h24v24H0V0z" fill="none" />
                <path d="M3.31 11l2.2 8.01L18.5 19l2.2-8H3.31zM12 17c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"
                    opacity=".3" />
                <path
                    d="M22 9h-4.79l-4.38-6.56c-.19-.28-.51-.42-.83-.42s-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1zM12 4.8L14.8 9H9.2L12 4.8zM18.5 19l-12.99.01L3.31 11H20.7l-2.2 8zM12 13c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
            </svg><span class="side-menu__label">Ecommerce</span><i class="angle fe fe-chevron-down"></i></a>
        <ul class="slide-menu">
            <li><a class="slide-item" href="">Doctors</a></li>
            <li><a class="slide-item" href="product-details.html">Product-Details</a></li>
            <li><a class="slide-item" href="product-cart.html">Cart</a></li>
        </ul>
    </li> --}}
</ul>
