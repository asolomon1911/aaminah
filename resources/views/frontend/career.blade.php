@extends('layouts.app')

@section('content')
    <!-- Slider   -->
    <section class="bg-secondary common-slider p-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 slider-left-wrapper">
                    <p class="top-small-title margin-bottom-5">HAVE FUN. MAKE A DIFFERENCE</p>
                    <p class="fs-3 fw-bold m-0 text-primary"><span class="text-black">Join Our</span> Team</p>
                    <p class="fs-5 text-primary margin-bottom-5">You decide <span class="text-black">how much and when you
                            work!</span>
                    </p>
                    <p class="slider-description text-light">We are passionate and compassionate professionals driven by
                        the mission of helping children and
                        families. We are growing fast and always looking for new talent. If you love people and like
                        challenges – come and join us!
                    </p>
                    <div class="slider-left-button-wrapper mt-5">
                        <a href="{{ route('contact') }}" class="btn btn-primary">Contact us</a>
                        <img src="{{ asset('assets/frontend/images/svg/round-arrow.svg') }}" class="round-arrow"
                            alt="Aaminah's House Slider Image">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="slider-image-wrapper">
                        <img src="{{ asset('assets/frontend/images/svg/career-slider-img.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content   -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="p-4">
                        <p class="title text-start common-line-height">Available <br><span
                                class="text-primary">Positions</span>
                        </p>
                        <p class="small-font"><strong>We currently have full and part time opportunities for staff that live
                                near and can service
                                the following Georgia Counties:</strong></p>
                        <p class="small-font">Bibb, Camden, Chatham, Dougherty, Fulton, Glynn, Liberty, Lowndes, Muscogee, and Richmond</p>
                    </div>

                </div>

                <div class="col-lg-7">
                    <div class="p-4">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Transporter
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="small-font">
                                            <b>Job Status:</b> Remote Part time & Remote Full time positions available;
                                            1099 Contractor. Fee
                                            for Service - hourly pay plus mileage reimbursement; Flexible hours
                                            (weekends as needed) <br><br>
                                            <b>Description:</b> Provide safe transportation of children and/or parents
                                            to family visits, doctor
                                            appointments, school, counseling sessions, etc. Transporter must be able to
                                            effectively
                                            schedule visits and communicate with stakeholders.<br><br>
                                            <b>Education:</b> High School Diploma or GED required.<br><br>
                                            <b>Experience:</b> Minimum of one year working in the human services field.
                                            Three (3) year Motor
                                            Vehicle Report (MVR) is required.<br><br>
                                            <b>Duties and Responsibilities:</b><br>
                                            • Collaborate with case managers, other contractors, and community partners
                                            to ensure
                                            effective treatment and case collaboration
                                            • Schedule and coordinate transports with case managers, families, and other
                                            service
                                            providers
                                            • Model and encourage positive behaviors to all individuals and families
                                            that you encounter
                                            • Safely transport individuals and families to their service appointments
                                            • Enter transport notes and document mileage in a timely manner in
                                            Electronic Health Record
                                            (EHR) System
                                            • Complete annual trainings as required by Aaminah's House and DFCS
                                            • Attend agency meetings<br><br>
                                            <b> Competencies:</b><br>
                                            • Reliable transportation<br>
                                            • Experience with writing progress notes<br>
                                            • Efficient with strong attention to detail<br>
                                            • Passion for serving communities and rendering effective treatment<br>
                                            • Ability to perform work accurately and thoroughly<br>
                                            • Ability to communicate effectively verbally and in writing<br>
                                            • Comply with all HIPAA regulations. Maintain patient, team member and
                                            employer
                                            confidentiality<br>
                                            • Decision Making and Problem Solving – Ability to make critical decisions
                                            and solve problems
                                            while following agency and partner policies and procedures<br>
                                            • Flexibility – Ability to adapt easily to changing conditions and work
                                            responsibilities<br>
                                            • Interpersonal Skills – Strong desire to support others and instruct in
                                            ways that empower<br>
                                            • Organization Skills – Must have planning skills with demonstrated ability
                                            to work
                                            independently and exercise sound judgment<br>
                                            • Self-starter with commitment to customer service and professional demeanor
                                            • Ability to pass all vital background checks/screenings
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed fw-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        Family Resource Specialist
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse " aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="small-font">
                                            <b>Job Status:</b> Remote Part time & Remote Full time positions available; 1099
                                            Contractor. Fee
                                            for Service - hourly pay, flat rate assessments, plus mileage
                                            reimbursement; Flexible hours
                                            (weekends as needed)<br><br>
                                            <b>Description:</b> Coordinate and provide direct services such as
                                            Behavior Aide, Transportation,
                                            Assessments (non clinical), Parenting Class, etc.<br><br>
                                            <b>Education:</b> Bachelor’s degree in a Human Services-related field or
                                            high school diploma and
                                            5 years’ experience in the human services field. Human Services degrees
                                            include: Psychology,
                                            Sociology, Counseling (religious counseling is not acceptable), Social
                                            Work, Child
                                            Development, Community Mental Health, Human Services, Criminal Justice
                                            (only with Juvenile
                                            experience/DJJ), or Education (experience teaching K-12 grade)<br><br>
                                            <b>Experience:</b> Minimum of one (1) year of working within the human
                                            services field, providing
                                            support services (supervised visitations, parent aide services,
                                            etc.).<br><br>
                                            <b>Duties and Responsibilities:</b><br>
                                            • Responsibilities will include but are not limited to:<br>
                                            • Coordinate social services and provide support to the clinical
                                            services team<br>
                                            • Monitor social service referrals to ensure that services are completed
                                            efficiently and timely<br>
                                            • Build relationship and rapport with case managers, contractors, and
                                            community partners to
                                            ensure effective treatment and case collaboration<br>
                                            • Perform social services to include Behavior Aide (parenting classes,
                                            supervised visitations,
                                            etc.) and transportation<br>
                                            • Document case notes in the online Electronic Health Record system
                                            (SP360)<br>
                                            • Maintain excellent communication and effective working relationships
                                            with other agency staff<br>
                                            • Manage and implement agency processes to ensure a standard of care is
                                            met<br>
                                            • Attend agency meetings and trainings pertinent to the role<br>
                                            • Performing other work-related duties as assigned<br><br>
                                            <b>Competencies:</b><br>
                                            • Passion for serving communities and rendering effective treatment<br>
                                            • Reliable transportation<br>
                                            • Experience with writing progress notes<br>
                                            • Efficient with strong attention to detail<br>
                                            • Ability to perform work accurately and thoroughly<br>
                                            • Ability to communicate effectively verbally and in writing<br>
                                            • Comply with all HIPAA regulations. Maintain patient, team member and
                                            employer
                                            confidentiality<br>
                                            • Decision Making and Problem Solving – Ability to make critical
                                            decisions and solve problems
                                            while following agency and partner policies and procedures<br>
                                            • Flexibility – Ability to adapt easily to changing conditions and work
                                            responsibilities<br>
                                            • Interpersonal Skills – Strong desire to support others and instruct in
                                            ways that empower<br>
                                            • Organization Skills – Must have planning skills with demonstrated
                                            ability to work<br>
                                            independently and exercise sound judgment
                                            • Self-starter with commitment to customer service and professional
                                            demeanor<br>
                                            • Ability to pass all vital background checks/screenings<br>
                                            • Leadership Skills – Ability to influence others to accomplish tasks
                                            effectively and to be
                                            responsible for making decisions
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed fw-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Clinical Support Specialist
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="small-font">
                                            <b>Job Status:</b> Remote Part time & Remote Full time positions available; 1099
                                            Contractor. Fee
                                            for Service - hourly pay, flat rate assessments, plus mileage reimbursement;
                                            Flexible hours
                                            (weekends as needed)<br><br>
                                            <b>Description:</b> Provide case coordination and complete clinical assessments
                                            for individuals and
                                            families within the home, community, and office setting.<br><br>
                                            <b>Education:</b> Master’s Degree; Licensed Counselor or Social Worker with one
                                            of the following
                                            licenses: LPC, LCSW, LMFT, Associate License or license eligible with minimum of
                                            5-year postgraduate experience<br><br>
                                            <b>Experience:</b> Minimum of one (1) year experience in a clinical/therapeutic
                                            role in the
                                            healthcare field or clinical environment (community-based/social s\ervices
                                            experience)
                                            providing clinical assessments<br><br>
                                            <b>Duties and Responsibilities:</b><br>
                                            • Build relationship and rapport with case managers, contractors, and community
                                            partners to
                                            ensure effective treatment and case collaboration<br>
                                            • Provide case coordination and case management for individuals receiving
                                            services<br>
                                            • Must be willing to commute and see clients in their home and community, as
                                            well as in-office<br>
                                            • Coordinate clinical services, including assigning cases, and requesting
                                            services<br>
                                            • Monitor clinical assessment referrals to ensure that services are completed
                                            efficiently and
                                            timely<br>
                                            • Perform clinical assessment services to include (Substance Abuse, Domestic
                                            Violence,
                                            Parental Fitness, Trauma, Comprehensive Client and Family Assessments, Bonding
                                            and
                                            Attachment)<br>
                                            • Document case notes in the online Electronic Health Record system (SP360)<br>
                                            • Maintain excellent communication and effective working relationships with
                                            other agency staff<br>
                                            • Maintain all applicable certifications and licensure<br>
                                            • Attend agency meetings and trainings pertinent to the role<br>
                                            • Performing other work-related duties as assigned<br><br>
                                            <b>Competencies:</b><br>
                                            • Experience with writing clinical assessments<br>
                                            • Knowledge of electronic health record and practice management systems<br>
                                            • Passion for serving communities and rendering effective treatment<br>
                                            • Reliable transportation<br>
                                            • Efficient with strong attention to detail<br>
                                            • Passion for serving communities and rendering effective treatment<br>
                                            • Ability to perform work accurately and thoroughly<br>
                                            • Ability to communicate effectively verbally and in writing<br>
                                            • Comply with all HIPAA regulations. Maintain patient, team member and employer
                                            confidentiality<br>
                                            • Decision Making and Problem Solving – Ability to make critical decisions and
                                            solve problems
                                            while following agency and partner policies and procedures<br>
                                            • Flexibility – Ability to adapt easily to changing conditions and work
                                            responsibilities<br>
                                            • Interpersonal Skills – Strong desire to support others and instruct in ways
                                            that empower<br>
                                            • Organization Skills – Must have planning skills with demonstrated ability to
                                            work<br>
                                            independently and exercise sound judgment<br>
                                            • Self-starter with commitment to customer service and professional demeanor<br>
                                            • Ability to pass all vital background checks/screening
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container" id="form">
            <div>
                <p class="title m-0">Apply Now!</p>
                <p class="text-center small-text text-light">All fields are required</p>

            </div>
            <div class="apply-position-wrapper">
                @if (Session::has('type'))
                    <div class="alert alert-{{ Session::get('type') }}">
                        {{ Session::get('message') }}
                        @php
                            Session::forget('type');
                            Session::forget('message');
                        @endphp
                    </div>
                @endif
                <form method="post" action="{{ route('send-career-email') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group m-2">
                                <label>First Name *</label>
                                <input type="text" name="first_name" class="form-control" required placeholder="Ex: John"
                                    value="{{ old('first_name') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group m-2">
                                <label>Last Name *</label>
                                <input type="text" name="last_name" class="form-control" required placeholder="Ex: Deo"
                                    value="{{ old('last_name') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group m-2">
                                <label>Email *</label>
                                <input type="email" name="email" class="form-control" required
                                    placeholder="Ex: hello@domain.com" value="{{ old('email') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group m-2">
                                <label>Phone *</label>
                                <input type="tel" name="phone" class="form-control" required
                                    placeholder="Ex: (123) 456-7890" value="{{ old('phone') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group m-2">
                                <label>Position *</label>
                                <select name="position" class="form-control" required>
                                    <option value=""> Select Position</option>
                                    <option value="Transporter" @if (old('position') === 'Transporter') selected @endif>
                                        Transporter</option>
                                    <option value="Family Resource Specialist"
                                        @if (old('position') === 'Family Resource Specialist') selected @endif>Family Resource Specialist
                                    </option>
                                    <option value="Clinical Support Specialist"
                                        @if (old('position') === 'Clinical Support Specialist') selected @endif>Clinical Support Specialist
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group m-2">
                                <label>Upload Resume</label>
                                <input type="file" name="file" accept="application/pdf" class="form-control"
                                    placeholder="Upload Resume" value="{{ old('file') }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group m-2">
                                <label>Comments</label>
                                <textarea name="description" rows="4" class="form-control" placeholder="Comments">{{ old('description') }}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-4">
                            <div>
                                <input type="submit" class="btn btn-primary w-100">
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </section>
@endsection
