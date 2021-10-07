<template>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Timesheet</h2>
                </div>
                <div class="col-lg-12">
                    <div class="card card-primary card-outline card-tabs">
                        <div class="p-2 pb-4">
                            <div class="timesheet_create_tit">
                                <h2>SELECT PLACEMENT</h2>
                            </div>
                            <div class="row mt-2">
                                <div class="col-lg-6">
                                    <label for="placement" class="d-block mb-1"
                                        >Placement</label
                                    >
                                    <input
                                        type="text"
                                        placeholder="Pmt1 (Wight Shipyard Company Limited) - Alex Ockendon - Welder"
                                        class="w-100"
                                    />
                                </div>
                                <div class="col-lg-6">
                                    <label for="placement" class="d-block mb-1"
                                        >Timesheet Period</label
                                    >
                                    <input type="text" class="w-100" disabled />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white">
                <div class="row">
                    <div class="col-lg-12 mb-2">
                        <ul
                            class="nav nav-tabs"
                            id="custom-tabs-three-tab"
                            role="tablist"
                        >
                            <li class="nav-item">
                                <a
                                    class="nav-link timesheet_color"
                                    id="custom-tabs-three-home-tab"
                                    data-toggle="pill"
                                    href="#custom-tabs-three-home"
                                    role="tab"
                                    aria-controls="custom-tabs-three-home"
                                    aria-selected="true"
                                    >Placement</a
                                >
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div
                                    class="card card-primary card-outline card-tabs"
                                >
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="p-2 pl-4">
                                                <div
                                                    class="timesheet_create_tit"
                                                >
                                                    <h2 class="pb-2">
                                                        PLACEMENT INFORMATION
                                                    </h2>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <h6>Ref Code:</h6>
                                                        <h6>Job Title:</h6>
                                                        <h6>Date Placed:</h6>
                                                        <h6>Start Date:</h6>
                                                        <h6>End Date:</h6>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <h6
                                                            class="timesheet_color"
                                                        >
                                                            Pmt1
                                                        </h6>
                                                        <h6>Welder</h6>
                                                        <h6>
                                                            Aluminium Welder
                                                        </h6>
                                                        <h6>25/05/2018</h6>
                                                        <h6>21/05/2018</h6>
                                                        <h6>Unknown</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div
                                    class="card card-primary card-outline card-tabs"
                                >
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="p-2 pl-4">
                                                <div
                                                    class="timesheet_create_tit"
                                                >
                                                    <h2 class="pb-2">
                                                        PARTICIPANTS
                                                    </h2>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <h6>Agency:</h6>
                                                        <h6>Worker:</h6>
                                                        <h6>Payroll:</h6>
                                                        <h6>Client:</h6>
                                                        <h6>Manager:</h6>
                                                        <h6>Consultant:</h6>
                                                        <h6>
                                                            Alternative
                                                            Managers:
                                                        </h6>
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <h6>
                                                            Ateca Marine Ltd
                                                        </h6>
                                                        <h6
                                                            class="timesheet_color"
                                                        >
                                                            Alex Ockendon
                                                        </h6>
                                                        <h6>
                                                            Weekly (Limited)
                                                        </h6>
                                                        <h6
                                                            class="timesheet_color"
                                                        >
                                                            Wight Shipyard
                                                            Company Limited
                                                        </h6>
                                                        <h6
                                                            class="timesheet_color"
                                                        >
                                                            Robert Myram
                                                        </h6>
                                                        <h6
                                                            class="timesheet_color"
                                                        >
                                                            Steve Slater
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
