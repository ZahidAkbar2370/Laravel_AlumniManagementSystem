
@extends('Admin.layouts.app')
@section('title', 'Users')
@section('content')

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-12 col-12 justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                               
                                <div class="col-lg-12 col-12 p-0">
                                    <div class="card rounded-0 mb-0 p-2">
                                        <div class="card-header pt-50 pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-0 text-center">{{ __('Create User') }}</h4>
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body pt-0">
                                                <form class="form-horizontal" method="post" action="{{ url('admin/create-user') }}" novalidate>
                                                    @csrf

                                               


                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label>{{ __('First Name') }} <span class="text-danger">*</span></label>
                                                                <div class="controls">
                                                                    <input type="text" name="first_name" class="form-control" placeholder="{{ __('First Name') }}" required data-validation-required-message="{{ __('First Name is required') }}">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label>{{ __('Last Name') }}  <span class="text-danger">*</span></label>
                                                                <div class="controls">
                                                                    <input type="text" name="last_name" class="form-control" placeholder="{{ __('Last Name') }}" required data-validation-required-message="{{ __('Last Name is required') }}">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="col-lg-4 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label>{{ __('Email') }} <span class="text-danger">*</span></label>
                                                                <div class="controls">
                                                                    <input type="text" name="email" class="form-control" placeholder="{{ __('Your Email') }}" required data-validation-required-message="{{ __('Email field is required') }}">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        

                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label>{{ __('Select Country') }} <span class="text-danger">*</span></label>
                                                                    <select class="form-control" required name="country"> 
                                                                        @if(!empty($countries)) 
                                                                        @foreach($countries as $country)
                                                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                                        @endforeach
                                                                        @endif
                                                                    </select>
                                                                   
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label>{{ __('Default Language') }} <span class="text-danger">*</span></label>
                                                                    <select class="form-control" required name="language">
                                                                        <option value="English">English</option>
                                                                        <option value="Portuguese">Portuguese</option>
                                                                        <option value="Spanish">Spanish</option>
                                                                        <option value="French">French</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        


                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label>{{ __('City') }} <span class="text-danger">*</span></label>
                                                                <div class="controls">
                                                                    <input type="text" name="city" class="form-control" placeholder="{{ __('Your City') }}" required data-validation-required-message="{{ __('City field is required') }}">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label>{{ __('Street') }} <span class="text-danger">*</span></label>
                                                                <div class="controls">
                                                                    <input type="text" name="street" class="form-control" placeholder="{{ __('Your Street') }}" required data-validation-required-message="{{ __('Street field is required') }}">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label>{{ __('Postal Code') }} <span class="text-danger">*</span></label>
                                                                <div class="controls">
                                                                    <input type="text" name="postal_code" class="form-control" placeholder="{{ __('Your Postal Code') }}" required data-validation-required-message="{{ __('Postal Code field is required') }}">
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label>{{ __('Company Name') }}</label>
                                                                <div class="controls">
                                                                    <input type="text" name="company_name" class="form-control" placeholder="{{ __('Your Company Name') }}">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label>{{ __('VAT Number') }} </span></label>
                                                                <div class="controls">
                                                                    <input type="text" name="vat_number" class="form-control" placeholder="{{ __('Your VAT Number') }}">
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label>{{ ('Phone Number') }} <span class="text-danger">*</span></label>
                                                                <div class="controls">

                                                                    <div class="input-group">
                                                                        <select class="w-30" name="phone_code" required>
                                                                        </select>
                                                                        <input type="text" name="phone_number" class="form-control" placeholder="{{ __('Your Phone Number') }}" required data-validation-required-message="{{ __('Phone Number field is required') }}">
                                                                    </div>
                                                                   
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label>{{ __('Password') }}<span class="text-danger">*</span></label>

                                                                <div class="controls">
                                                                    <input type="password" name="password" class="form-control" placeholder="{{ __('Your Password') }}" required data-validation-required-message="{{ __('The password field is required') }}" minlength="6">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label>{{ __('Confirm Password') }} <span class="text-danger">*</span></label>

                                                                <div class="controls">
                                                                    <input type="password" name="con-password" class="form-control" placeholder="{{ __('Confirm Password') }}" required data-validation-match-match="password" data-validation-required-message="{{ __('The Confirm password field is required') }}" minlength="6">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        
                                                        <div class="col-lg-4 col-md-4 col-4 mb-2">
                                                            <fieldset class="checkbox">
                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                    <input id="accept" type="checkbox" value="y">
                                                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span class=""> {{ __('Term of Use') }}</span>
                                                                </div>
                                                            </fieldset>
                                                        </div>


                                                         <div class="col-lg-4 col-md-4 col-4 mb-2">
                                                            <fieldset class="checkbox">
                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                    <input id="acceptPolicy" type="checkbox" value="y">
                                                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span class=""> {{ __('Privacy Policy') }}</span>
                                                                </div>
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-lg-4 col-md-4 col-4 mb-2">
                                                            <fieldset class="checkbox">
                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                    <input id="acceptFraud" type="checkbox" value="y">
                                                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span class=""> {{ __('Anti-Fraud Policy') }}</span>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        
                                                    </div>
                                                     <button disabled="disabled" id="submitbtn" type="submit" class="btn btn-primary float-left btn-inline mb-50">{{ __('Register') }}</button>
                                                </form>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->



    <!-- TeamOfUse Modal -->
    <div class="modal fade" id="TeamOfUse" >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header bg-theme">
            <h5 class="modal-title text-white">{{ __('Terms of Use') }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-dark">
            <h2>{{ __('Terms of Use') }}</h2>
            <p>
                {{ __('Thank you very much for choosing SINFONIASUBLIME DISTRIBUTION as your Digital Music Distributor. We hope you enjoy our service and achieve great success with your music career. Please, read these Terms of Use very carefully as they constitute a binding agreement between you (in these Terms, the End User or You), and us (in these Terms, SINFONIASUBLIME DISTRIBUTION, We or Us) and are effective upon the registration on the platform, available at https://www.distribution.sinfoniasublime.com (hereinafter, the Platform).') }} <br>
                {{ __('Formally, the provider of the service and responsible of the Platform is SINFONIASUBLIME UNIPESSOAL, LDA, which is a limited liability Company constituted and existing under the laws of Portugal, with legal address in Avenida Da Liberdade N. 866 - 3L 3700-164 São João Da Madeira (Portugal), Tax ID #515947687 and registered at the Commercial Register of São João Da Madeira with Company Registration Number São João Da Madeira. Our contact information can be found in the "Contact" Tab of the "Legal" section in your account.') }} <br>
                {{ __('The SINFONIASUBLIME DISTRIBUTION services shall be provided in accordance with:') }} <br>
                <ol>
                    <li>{{ __('The Terms of Use set forth in this document.') }}</li>
                    <li>{{ __('The Privacy Policy made available to You in the Legal Section of your Account.') }}</li>
                </ol>
                <p>
                    {{ __('Please, provide and fill out all the information required in the "Account-> Profile" section of the Platform as it is necessary to create the contractual relationship between us. We made our Terms of Use as easy to read as possible, but if you have any doubt or query, please contact us by using any of the communication channels described above.') }}
                </p>
                <h2>{{ __('Table of Contents:') }}</h2>   
                <ul>
                    <li>{{ __('Definitions') }}</li>
                    <li>{{ __('General Conditions; Access to and use of the Services') }}</li>
                    <li>{{ __('What You can do and what you can\'t do') }}</li>
                    <li>{{ __('Fees') }}</li>
                    <li>{{ __('Duration and Termination') }}</li>
                    <li>{{ __('Intellectual Property Rights') }}</li>
                    <li>{{ __('Fraud') }}</li>
                    <li>{{ __('Privacy') }}</li>
                    <li>{{ __('Warranty. Limitation of Liability') }}</li>
                    <li>{{ __('Miscellaneous') }}</li>
                </ul>
                <h2>{{ __('Definitions') }}</h2>
                <p>
                    {{ __('To facilitate the understanding of these Terms of Use, the following principal expressions will have these meanings:') }}
                </p>
                <p>
                    <b>“{{ __('Customer') }}”:</b> {{ __('refers to any individual that accesses or makes use of a Digital Music Service.') }} <br>
                    <b>“{{ __('Digital Distribution') }}”:</b> {{ __('means the transferring by any means of data transmission or communication, through the internet, internet radio, kiosks, in-store listening posts, mobile, wireless, satellite and similar communication systems, whether now known or existing in the future, of the End User Content in multiple digital formats including but not limited to clips, permanent downloads, subscriptions, streams and timeout-downloads, ring-tones and ring-back tones and any other means.') }} <br>
                    <b>“{{ __('Digital Music Service') }}”:</b> {{ __('means any digital outlet, such as music download portals, music and video streaming services, mobile music platforms, digital (and terrestrial) radio stations, digital (and terrestrial) television networks, and mobile networks (each a “DMS”, i.e.: Apple iTunes, Spotify, Tidal, Google Play, etc.), that enables Customers to purchase and/or listen to End User Content.') }} <br>
                    <b>“{{ __('End User') }}”:</b> {{ __('that’s You (hereinafter, the End User), which is an artist, songwriter, author, producer, agent (including royalty recipients), rights holder or others who are authorized and entitled to exploit certain music (including the composition and the recording) and to use the Platform, the Platform API or portions thereof.') }} <br>
                    <b>“{{ __('End User Content') }}”:</b> {{ __('means all intellectual property works (including without limitation musical works, recordings, video clips, ring-tones, real-tones, lyrics, logos, covers and photos) as to which the End User has the necessary exploitation rights, including “Neigboring Rights”.') }} <br>
                    <b>“{{ __('Platform') }}”:</b> {{ __('refers to the digital music distribution platform available at https://www.distribution.sinfoniasublime.com or your designated subdomain.') }} <br>
                    <b>“{{ __('Service') }}”:</b> {{ __('means the service provided by Us through the Platform, in order to make the End User Content available on Digital Music Services (here, the Digital Distribution Services).') }}
                    {{ __('Hence, these are the rights and obligations of each of us:') }}

                </p>
                <h2>{{ __('General Conditions; Access to and use of the Services') }}</h2>
                <p>
                    {{ __('2.1 During the Duration and subject to compliance by You with these Terms of Use, You have the right to access to the Platform and enjoy the Service provided by Us through it.') }} <br>
                    {{ __('2.2 For information purposes, the features of the Platform include but are not limited to:') }}
                </p>
                


            </p>
            <ul>
                <li>{{ __('Upload of the End User Content to the Platform for its availability on Digital Music Services.') }}</li>
                <li>{{ __('Selection of the channels, territories and Digital Music Services where End Users want their content to be available at.') }}</li>
                <li>{{ __('Optional services, including quality control, distribution, updates and storage.') }}</li>
                <li>{{ __('Pay directly the corresponding fees for the contracting services.') }}</li>
                <li>{{ __('Hosting of the End User Content.') }}</li>
                <li>{{ __('Qualification, transformation and transmission to Digital Music Services.') }}</li>
                <li>{{ __('Updating of distributed works in Digital Music Services.') }}</li>
                <li>{{ __('Takedown of content.') }}</li>
                <li>{{ __('Assigning codes (ISRC, UPC, ISWC).') }}</li>
                <li>{{ __('Accessing sales and usage reports of the End User Content in the Digital Music Services.') }}</li>
                <li>{{ __('Request out payment of the Royalties generated by the End User Content.') }}</li>
                <li>{{ __('Manage and receive neighboring rights.') }}</li>
            </ul>
            <p>
                {{ __('Nonetheless, We reserve the right to include new functionalities or eliminate any of the features of the Service, to change the characteristics, design, appearance or presentation of the Platform and the Service, in which case, if You are unsatisfied with the resulting Platform, You can terminate the relationship in the terms described in these Terms of Use.') }} <br>
                {{ __('2.3 Furthermore, You undertake that You have all necessary rights in respect with Your Content to exploit it through the Platform and, therefore, give us the administration of your Content as requested by You at each time, in the terms described in Section 6. This right and authorization is granted on an exclusive basis for those Digital Music Services on which You decide to make Your Content available through our Service; this means that if You use the Service to make Your Content available in an specific Digital Music Service, You can’t make the same content available in the same Digital Music Service using a service different than the Service and the Platform.') }}
            </p>
            <h2>{{ __('What You can do and what you can\'t do') }}</h2>
            <h4>{{ __('Use of the Platform') }}</h4>
            <p>
                {{ __('3.1 By registering and uploading Your Content on the Platform, You assume and undertake, essentially, the following obligations:') }}
            </p>

            <ul>
                
                
                
                
                 
               



                <li>{{ __('You shall use the Platform diligently and upload information and content whose rights belong to You or for which You are authorized by the rights holder.') }}</li>
                <li>{{ __('You shall provide all the necessary information to use the Service, which We will request during the use of the Service.') }}</li>
                <li>{{ __('You shall pay all the applicable fees for the Services rendered by Us, as described below.') }}</li>
                <li>{{ __('You shall inform Us of any activity that is inconsistent with this Terms of Use.') }}</li>
                <li>{{ __('You shall indicate through the Platform if Your Content contains "explicit” content.') }}</li>
                <li>{{ __('The term "explicit" content refers to content that evokes sexual, racist, violent or any other harmful connotations.') }}</li>
                <li> {{ __('You shall not perform illegal activities through the Platform or the Services, and/or actions that could harm or damage any party, including Us.') }}</li>
            </ul>
            <p>
                {{ __('3.2 You undertake to use diligently the Platform and, therefore, undertake:') }}
            </p>
            <ol type="a">

                <li>{{ __('Not to grant access to the Platform to any third party or to employees that due to their position in the company, reasonably should not access the Platform;') }}</li>
                <li>{{ __('Not to access the source code of the Platform;') }}</li>
                <li>{{ __('Not to use the information, rules or instructions contained in the Platform for purposes different than those established in these Terms of Use;') }}</li>
                <li>{{ __('Not to disclose to any third party any of the information obtained through the Platform;') }}</li>
                <li>{{ __('Not to permit the public to access or use the Platform (including without limitation, via the internet).') }}</li>
                <li> {{ __('Not to use the Platform to upload content not owned by You or for which You do not have an explicit license to commercially exploit.') }}</li>
                <li>{{ __('Not to reproduce the Platform, in whole or in part, for any purposes;') }}</li>
                <li>{{ __('Not to copy and/or distribute the Platform, in whole or in part, by any manner;') }}</li>
                <li>{{ __('Not to create any form of "frame" or "mirror" for (any part of) the Platform on any other server or wireless or Internet based device;') }}</li>
                <li>{{ __('Not to transfer the Platform to any third party;') }}</li>
                <li>{{ __('Not to assign, sell, resell, rent, lease, lend, sublicense, outsource or otherwise transfer the Platform and/or the Service to any third party, or authorize or appoint any third party to do so;') }}</li>
                <li>{{ __('Not to modify the Platform or provide any person with the means to do the same. This includes the creation of derivative works and to translate, disassemble, recompile, alter, destroy or reverse engineer the Platform or attempt to do so, unless when expressly permitted by the applicable regulation;') }}</li>
                <li>{{ __('Not to circumvent the technological protection measures incorporated in the Platform.') }}</li>
            </ol>
            <p>
                {{ __('3.3 In general, You agree to use the Platform in a lawful and diligent manner and will not do anything forbidden by Law of by these Terms of Use. You will be liable to Us in respect of any breach of these Terms of Use, as described in Section 9.') }}
            </p>
            <h2>{{ __('Upload and storage of Your Content') }}</h2>
            <p>
                {{ __('3.4 After registration, You can upload Your Content (including sound recordings and audiovisual works, photographs, images, and other related content) to your personal account, for their subsequent Digital Distribution.') }} <br>
                {{ __('3.5 You can only upload content to the Platform for which You are the owner or have the rightsholders’ permission in writing, and cannot upload any content whose rights are held by third parties. We may ask you to facilitate to Us all documents, contracts and registration certificates necessary to confirm that you own the rights of Your Content and reserve the right to ask you not to upload content from a specific author or producer, or We may also remove any of Your Content from the Platform for which We don’t have the legal conviction that it belongs to You.') }} <br>
                {{ __('3.6 As specified before, You can’t, under any circumstance, upload any content that could be harmful, threatening, unlawful, confidential, defamatory, libelous, harassing, obscene, indecent, fraudulent, infringing the rights of privacy, incites hate or includes texts of racist, ethnic or other nature, that is against or hinders or limits in any way any individual, or which may expose Us or third parties to any harm or liability of any kind.') }} <br>
                {{ __('3.7 You can’t either upload any private or fake information of any third party, including, among others, mail addresses, phone numbers, and email addresses.') }} <br>
                {{ __('3.8 You are not allowed to upload any content that may breach copyright law or third party brand ownership') }} <br>
                {{ __('3.9 As We specified before, You are free to exploit Your Content, directly or through third parties, to Digital Music Services which are not selected or made available on the Platform.') }} <br>
                {{ __('3.10 We reserve the right to access to and analyze all or part of Your Content in order to guarantee the compliance with the Law and with these Terms of Use. We also reserve the right to delete files, data or information uploaded by You if We deem that they are not in compliance with these Terms of Use, or if We think they are not suitable or appropriate for the Platform or the Service.') }} <br>
                {{ __('3.11 Finally, for clarification purposes, these Terms of Use do not provide any obligation to You to upload a minimum quantity of content and/or a minimum availability of it.') }}
                <h2>{{ __('Fees') }}</h2>
                <p>
                    {{ __('4.1 By using the Service, You shall pay to Us the fees corresponding to the Services contracted, which can be found at any time in the "My Account > Pricing" section of your Account.') }} <br>
                    {{ __('Additionally, You will receive 70.00% of the net incomes (deducting expenses and taxes) which We receive from Digital Music Services from the exploitation of Your Content. If applicable, You authorize Us to deduct 30% sales commission percentage from the net incomes received by Us from Digital Music Services.') }} <br>
                    {{ __('The abovementioned Service fees, sales commission percentage and the minimum payment threshold for You are listed in the Platform, in the "My Account > Pricing" section.') }} <br>
                    {{ __('4.2 All payments and associated claims: (i) will be made through the corresponding "Sales->Balance" section of the Platform; (ii) will be made in the currency stated by Us; and (iii) will be payable via PayPal or bank-to-bank wire transfer to the account designated by You. If any authority imposes a duty, tax, levy, or fee, You agree to pay that amount or supply exemption documentation.') }} <br>
                    {{ __('Payment of generated sales fees under these Terms of Use shall be made on a once a month, within days from receipt of an out payment request from you, provided always that the due amount exceeds the corresponding minimum payment threshold for the relevant requested payout. Nonetheless, You authorize Us to withhold any payment during an additional period of twenty-four (24) months in the event we deem that such payment contains incomes or fees totally or partially generated fraudulently or contravening these Terms of Use or the Anti-Fraud Policy. Any payment You receive from Us will be subject to all and any applicable taxes (including VAT, withholding taxes, etc.).') }} <br>
                    {{ __('The payment of an invoice will not later prevent Us from disputing the invoiced amounts pursuant to any rights herein. We may recoup any amounts due to Us from You by withholding such amounts from any fees otherwise due in the future and providing notice thereof.') }} <br>
                    {{ __('4.3 If any Digital Music Service deducts any amount due to any passed contingency, overpayment or conclusion in relation to Your Content or an investigation by Us reasonably demonstrates that any of Your fees for any prior month should have been lesser, We may, at the conclusion of such investigation and at our sole discretion, provide a revised sales report for the applicable month(s) and deduct the corresponding amount from future payments, what You acknowledge and accept.') }} <br>
                    {{ __('4.4 Therefore, You expressly and irrevocably authorize Us to collect all incomes from the exploitation of Your Content through the Platform, including but not limited to author rights, performing and recording rights, any levy established by law for private copies, or for any other concept, without limitation. For this purpose, We may ask you to sign a specific authorization letter as solicited by the corresponding Performing Right Organization, which You undertake to provide as soon as requested by Us.') }} <br>
                    {{ __('4.5 We will make any corresponding invoices and receipts, including mandatory taxes, available to You according to the applicable regulations.') }} <br>
                    {{ __('4.6 We reserve the right to change in the future the Service price, the sales commission percentage or the minimum payment threshold, in which case the new terms will be notified to You not less than thirty (30) days prior to the effective date and will be applicable to future incomes.') }} <br>
                    {{ __('4.7 We may decide not to charge you initially for the use of the Service and any optional service, however, You authorize Us to deduct the corresponding amounts from your future payments.') }} <br>
                    {{ __('In the event that after one year from the start of the relationship, You have distributed Your Content on credit, without having generated enough sales to pay back the outstanding balance, We reserve the right to request the payment of the outstanding balance.') }} <br>
                    {{ __('4.8 Audits: We will maintain accurate and complete records of account including all documentation needed by You to compute and verify the fees payable to You in connection with the performance of our agreement. During the Duration of our relationship and the three-year period thereafter, upon reasonable advance written notice, but in no event less than 30 calendar days’ notice, an independent reputable certified accounting firm appointed by You, will have the right to examine those records at any time during our normal business hours at the place where such records are normally maintained. You will have the right to audit your records only once a year.') }}

                </p>
                <h2>{{ __('Duration and Termination') }}</h2>
                <p>
                    {{ __('5.1 The duration of our contractual relationship is initially undetermined. It shall begin when registering at the Platform and upon the explicit acceptance of these Terms of Use, and You or Us may elect to terminate the Service at any time by providing notice, in accordance with these Terms of Use, of thirty (30) days from the termination date.') }} <br>
                    {{ __('In the event of termination, You must pay all outstanding amounts to Us in a maximum period of five (5) days from the notification date or We will transfer to you any positive balance, whichever is the case. Prior to requesting the termination, You must remove the Content from the DMSs using the "Takedown" functionality that is available to you within the Platform. Moreover, in the event of termination, You authorize Us suspend your account, block your access to your account and delete all the files and information uploaded by You to the Platform. The termination shall not affect the accrued rights and obligations of the parties at the date of termination.') }} <br>
                    {{ __('5.2 Additionally, We may terminate our relationship and the Service:') }} <br>
                    <ol type="a">

                        
                        
                        
                        
                        

                        <li>{{ __('in the event You breach any term or condition established by Us (here or in any other document accepted by You) and You fail to remedy such breach within two (2) days of the date of notice from Us;') }}</li>
                        <li>{{ __('in case the outstanding balance is not paid as per Section 4.7, We will have the right to terminate the relationship and cease the Service.') }}</li>
                        <li>{{ __('If You become the subject of any proceeding related to your liquidation or insolvency (whether voluntary or involuntary) which is not dismissed within sixty (60) calendar days;') }}</li>
                        <li>{{ __('If You infringe our Intellectual Property Rights.') }}</li>
                        <li>{{ __('If You infringe our Anti-Fraud Policy.') }}</li>
                        <li>{{ __('In case you commit any unlawful activity using the Platform or the Service.') }}</li>
                    </ol>

                    {{ __('5.3 In all cases, all costs due for any Service provided by Us until the termination date, must be duly paid by You.') }} <br>
                    {{ __('5.4 We will not be liable to You for damages of any kind because of the termination of our relationship in accordance with these Terms of Use. Our respective rights and obligations contained in sections that by their nature are intended to survive, will survive the termination of this relationship.') }} <br>
                    {{ __('Regardless the termination of the Service, You and We agree to maintain in force those contracts signed by Us with third parties before receiving the notification of termination in the event the contracts with such third parties would be still in force.') }} <br>

                </p>
                <h2>{{ __('Intellectual Property Rights') }}</h2>
                <p>
                    {{ __('6.1 Nothing contained herein shall be construed as granting or conferring any property rights in the Platform or any part thereof to You; therefore, We are not granting to You by means of this Terms of Use, the right to exploit our Intellectual Property (including but not limited to copyright, patent, trademarks, registered marks, trade secrets, and confidential and proprietary information relating thereto). All these rights are expressly reserved by Us and, as a consequence, We will retain all licensed or ownership rights to the Platform, our brands, technology, etc., together with any complete or partial copies thereof.') }} <br>
                    {{ __('6.2 When You upload any of Your Content to our servers through the Platform, you are recognizing the following:') }} <br>
                    <ol type="a">

                       
                        
                        

                        <li> {{ __('That We are authorized to administrate, directly or through third parties, Your Content (including the recordings, videos, compositions, artwork, etc.) through the Digital Music Services selected by You, in the entire world and during the duration of our relationship (including section 5.4);') }}</li>
                        <li> {{ __('That You own and/or control all rights in and to the Your Content and/or have the full right and ability to upload Your Content and exploit it in the terms described herein;') }}</li>
                        <li>{{ __('That Your Content does not infringe the copyrights or any other right, of any third party.') }}</li>
                        <li>{{ __('That We are authorised during the Duration of the agreement, to grant to third parties synchronisation licences of Your Content for the entire world.') }}</li>
                    </ol>
                    <br>

                    {{ __('6.3 If any of Your Content use any kind of the so-called “copyleft license” and such content was created or developed by a person (including artists and producers) which is not associated to any Performing Right Organization (such as but not limited to SACEM in France, MCPS in UK, SGAE in Spain, GEMA in Germany, etc.) in any country of the world, upon the compliance of section 4.4 above, then You authorize Us to claim on their behalf, where appropriate, to the Performing Right Organization of each country, any royalties, levies, duties, etc. that Digital Music Services have paid in respect with such content.') }} <br>
                    {{ __('6.4 You must indicate through the Platform the name of the record label (associated with the phonographic producer) for each release or phonogram that you intend to distribute in any country in the world using the platform (phonographic producer that is associated with any Collective Management Society (CMO), as for example SCPP in France, PPL in the United Kingdom, AGEDI in Spain, CAPIF in Argentina, etc.). In contrast, if any of Your content is distributed using any "Public Label Name" available on the platform, you agree, in accordance with the provisions of section 4.4 above, with the following:') }} <br>

                    <ol type="a">
                        <li>{{ __('You authorize and facilitates the transmission by you to us and the acquisition by us from you of the following rights: Reproduction Rights, Public Communication Rights, of your contents (sound recordings or music videos) distributed using the platform.') }}</li>
                        <li>{{ __('You authorize us to claim in your name, as appropriate, to the Collective Management Society (CMO) of each country, any rights, charges, obligations, etc. that those have collected with respect to said content.') }}</li>

                    </ol>
                    <h2>{{ __('Fraud') }}</h2>
                    {{ __('7.1 We work very hard and invest extensive resources to avoid automated and fraudulent behaviors. For this reason, we have created a specific Anti-Fraud Policy, that is available in the "Legal" section of your account. When you accept these Terms of Use, you also acknowledge and accept our Anti-Fraud Policy and, therefore, You accept that, among other commitments, You will not, and will not authorize any third party to, directly or indirectly, generate automated, fraudulent, or otherwise invalid playback actions, especially in Digital Music Services.') }} <br>
                    {{ __('7.2 In this Anti-Fraud Policy we have implemented a 3-strike policy; therefore, please, read carefully such policy as We will be very strict applying it.') }}
                    <h2>{{ __('Privacy') }}</h2>
                    {{ __('8.1 Our data protection policy is described in the Privacy Policy. The Privacy Policy is part of our relationship and, therefore, when you accept these Terms of Use, you are also acknowledging and accepting our Privacy Policy, which is available in the "Legal" section of your account.') }}
                    <h2>{{ __('Warranty. Limitation of liability') }}</h2>

                    {{ __('9.1 We cannot warrant to You that the Platform and the Service will meet your requirements. Except as expressly provided in these Terms of Use, We provide the Services and the Platform "as is" and without warranty. We disclaim all other warranties, express or implied, including the implied warranties of non-infringement, merchantability, and fitness for a particular purpose. The Platform cannot be tested in every possible operating environment, therefore We do not warrant that the functions contained in the Platform will meet your requirements, that operation of the Platform will be uninterrupted, or that the Platform is error free. Except as set forth herein and to the extent permitted by law, all other warranties, expressed or implied, statutory or otherwise, including, but not limited to, implied warranties of merchantability, quality, and fitness for a particular purpose are excluded on the part of Us. ') }} <br>
                    {{ __('Neither Us nor any of our third-party suppliers or partners shall be liable for any injury, loss or damage, whether indirect, special, incidental or consequential nor for any lost profits, contracts, loss of data or programs, the cost of recovering such data, or incorrect, defective or faulty performance of Your Content.') }} <br>
                    {{ __('9.2 You will assume all liability and defend, indemnify, and hold Us and any party, harmless for the use of the Platform and the Service.') }} <br>
                    {{ __('9.3 Our liability under or in connection with the Platform and the Service (including damages) whether arising from negligence, breach of contract or otherwise shall be limited to the value of the fees paid by You to Us during the 12 months prior to the claim.') }} <br>
                    {{ __('9.4 We shall not be liable for any loss of, whether arising directly or indirectly, (a) profits, (b) savings, (c) goodwill, (d) reputation, (e) revenue, (f) anticipated savings, (g) business or opportunity or (h) any other like pure economic loss; nor any special, indirect, consequential or incidental losses or damages of any kind or nature whatsoever regardless of whether in each case arising from breach of contract, warranty, tort, strict liability, negligence or otherwise, even if advised of the possibility of such loss or damage, or if such loss or damage could have been reasonably foreseen.') }} <br>
                    {{ __('9.5 We respect the rights of others (including copyright, image and personality rights, etc.) and expect our clients to do the same. In compliance with the European Directive on Liability of Internet Service Providers, we will respond expeditiously to remove or disable access to material uploaded by users of the Platform and/or the Service that is claimed to infringe third parties’ rights.') }}
                    <h2>{{ __('Miscellaneous') }}</h2>


                    {{ __('10.1 Non-assignment: You may not assign your account or any interest therein to any third party (including companies of your same group), without our express prior written consent.') }} <br>
                    {{ __('10.2 Severability: If any provision of this Agreement is found invalid or unenforceable, that provision will be enforced to the maximum extent permissible, and the other provisions of this Agreement will remain in force.') }} <br>
                    {{ __('10.3 Promotion: We are not obliged to effectuate any online promotion and/or marketing of Your Content under these Terms of Use. However, We may offer complimentary promotional services which You may contract separately.') }} <br>
                    {{ __('10.4 Notifications: Any notice that You or Us need to effectuate in connection with the development and performance of these Terms of Use shall be, whichever their object, by email at the addresses listed on your account on the Platform and, to Us, to any of the following means: ') }} <br>
                    





                </p>

                

            </p>

            <p class="text-center">
                {{ __('SINFONIASUBLIME UNIPESSOAL, LDA') }} <br>
                {{ __('Avenida Da Liberdade N. 866 - 3L') }} <br>
                {{ __('3700-164 São João Da Madeira (Portugal)') }} <br>
                <b>{{ __('Email') }}:</b> sinfoniasublimelda@gmail.com
            </p>
            <p>
                {{ __('10.5 Amendments: We may amend this Terms of Use, the Anti-Fraud Policy, the Privacy Policy or any other legal document from time to time, in which case the new terms will supersede prior versions. We will notify You not less than ten (10) days prior to the effective date of any such amendment and your continued use of the Service and/or the Platform following the effective date of any such amendment may be relied upon by Us as your consent to any such amendment. Our failure to enforce at any time any provision of these Terms of Use, the Anti-Fraud Policy or any other legal document does not constitute a waiver of that provision or of any other provision of our terms.') }} <br>
                {{ __('10.6 Confidentiality: In the event We provide any kind of information to you (including but not limited to statistics of the Platform, performance KPIs, marketing material, etc.) You agree to treat such information as confidential and in no event shall be utilized (for its benefits or for third parties), disclosed, transmitted to third parties or made public in any way by You without our prior written agreement.') }} <br>
                {{ __('10.7 Law and Jurisdiction: This Agreement shall be governed and construed in accordance with the laws of Portugal. When valid by law, any dispute, controversy or claim arising under, out of or relating to this contract and any subsequent amendments of this contract, including, without limitation, its formation, validity, binding effect, interpretation, performance, breach or termination, as well as non-contractual claims, shall be referred to and finally determined by arbitration in accordance with the WIPO Arbitration Rules. The arbitral tribunal shall consist of a sole arbitrator. The place of arbitration shall be São João Da Madeira (Portugal). The language to be used in the arbitral proceedings shall be English. However, if local regulations establish any kind of limitation based on the nature of the End User, any claims or lawsuits between the parties will be resolved by the Courts of the city of São João Da Madeira (Portugal).') }}
            </p>

            <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">{{ __('Accepted') }}</button>
          </div>
        </div>
      </div>
    </div>




    <!-- PrivacyPolicy Modal -->
    <div class="modal fade" id="PrivacyPolicy" >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header bg-theme">
            <h5 class="modal-title text-white">{{ __('Privacy Policy') }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-dark">
            <h2>{{ __('Privacy Policy') }}</h2>
            <h3>{{ __('SINFONIASUBLIME DISTRIBUTION ’s Privacy Commitment') }}</h3>
            <p>
                {{ __('We ask for only the least amount of information necessary, gathering only what we believe is essential for doing business, or for the specific transaction at hand.') }} <br>
                {{ __('The goal of this policy is to make explicit the information we gather, how we will use it, and how we will not. This policy is unfortunately longer than we would like, but we must unambiguously address all the relevant cases. We will try and keep the language simple and direct as much as possible.') }}

            </p>
            <h2>{{ __('This Privacy Policy is divided into three parts:') }}</h2>
            <h3>{{ __('Part I – Information SINFONIASUBLIME DISTRIBUTION collects and controls') }}</h3>
            <p>
                {{ __('This part deals with how SINFONIASUBLIME DISTRIBUTION collects and uses information about website visitors, potential customers, users of SINFONIASUBLIME DISTRIBUTION\'s products and services, and others who contact SINFONIASUBLIME DISTRIBUTION through forms or email addresses published on or linked to our websites.') }}
            </p>


            <h3>{{ __('Part II – Information that SINFONIASUBLIME DISTRIBUTION processes on your behalf') }}</h3>
            <p>
                {{ __('This part deals with how SINFONIASUBLIME DISTRIBUTION handles data that you entrust to SINFONIASUBLIME DISTRIBUTION when you use our products and services, or when you share any personal or confidential information with us while requesting customer support.') }}
            </p>
            <h3>{{ __('Part III – General') }}</h3>
            <p>
                {{ __('This part deals with topics that are relevant to both Parts I and II, and other general topics such as SINFONIASUBLIME DISTRIBUTION\'s security commitments and how we will inform you when we change this Privacy Policy.') }}
            </p>
            <h3>
                {{ __('Part I – Information SINFONIASUBLIME DISTRIBUTION collects and controls') }} <br>
                {{ __('What information SINFONIASUBLIME DISTRIBUTION collects') }}
            </h3>

            <p>
                {{ __('We collect information about you only if we need the information for some legitimate purpose. SINFONIASUBLIME DISTRIBUTION will have information about you only if (a) you have provided the information yourself, (b) SINFONIASUBLIME DISTRIBUTION has automatically collected the information, or (c) SINFONIASUBLIME DISTRIBUTION has obtained the information from a third party. Below we describe the various scenarios that fall under each of those three categories and the information collected in each one.') }}
            </p>
            <p>
                <u>{{ __('Information that you provide us') }}</u>
            </p>
            <ol type="i">
                <li>
                    {{ __('Account signup : When you sign up for an account to access one or more of our services, you\'ll be required to use an email address and a password for creating the account. Once your account is created, you can also add information like your name, contact number, email address, company name, and country to complete your profile.') }}
                </li>
                <li>
                    {{ __('Payment processing : When you start to actively use your account, we ask you to provide your name, contact information, tax ID and credit card information or other payment account information. In all cases, your credit card information is stored and processed by the Payment Gateway Service Provider you choose, not by us. During the payment they inform you about their privacy and security policies, make sure you read them carefully.') }}
                </li>
                <li>
                    {{ __('Interactions with SINFONIASUBLIME DISTRIBUTION : We may record, analyze and use your interactions with us, including email, telephone, and chat conversations with our sales and customer support professionals, for improving our interactions with you and other customers.') }}
                </li>

            </ol>
    
            <p>
                <u>{{ __('Information that we collect automatically') }}</u>
            </p>
            <ol type="i">
                <li>
                    {{ __('Information from browsers, devices and servers : When you visit our websites, we collect information that web browsers, mobile devices and servers make available, such as the internet protocol address, browser type, language preference, time zone, referring URL, date and time of access, operating system, mobile device manufacturer and mobile network information. We include these in our log files to understand more about visitors to our websites') }}
                </li>
                <li>
                    {{ __('Information from first party cookies and tracking technologies : We use temporary and permanent cookies to identify users of our services and to enhance user experience. We may also use cookies, beacons, tags, scripts, and other similar technologies to identify visitors, track website navigation, gather demographic information about visitors and users, understand email campaign effectiveness and for targeted visitor and user engagement by tracking your activities on our websites. We use first-party and third-party cookies on our websites.') }}
                </li>
                <li>
                    {{ __('Information from application logs and mobile analytics : We or our contractors may collect information about your use of our services from application logs and in-house usage analytics tools, and use it to understand how your business use and needs can improve our products. This information includes clicks, scrolls, features accessed, access time and frequency, errors generated, performance data, storage utilized, user settings and configurations, and devices used to access and their locations.') }}
                </li>
            </ol>

           
            <p>
                <u>{{ __('Information that we collect from third parties') }}</u>
            </p>
            <ol type="i">
                <li>
                    {{ __('Signups using OpenID authentication service providers : You can log in to SINFONIASUBLIME DISTRIBUTION Services using supported OpenID authentication service providers such as Soundcloud, Facebook and Google. These services will authenticate your identity and give you the option to share certain personal information with us, such as your name and email address.') }}
                </li>
            </ol>
            <h3>{{ __('Purposes for using information') }}</h3>
            <p>
                {{ __('In addition to the purposes mentioned above, we may use your information for the following purposes:') }}
            </p>
            <ul>
                <li>{{ __('To communicate with you (such as through email) about services that you have signed up for, changes to this Privacy Policy, changes to the Terms of Service, or important notices;') }}</li>
                <li>
                    {{ __('To keep you posted on new products and services, upcoming events, offers, promotions and other information that we think will be of interest to you;') }} <br>
                •   {{ __('To ask you to participate in surveys, or to solicit feedback on our products and services;') }}
                </li>
                <li>
                    {{ __('To set up and maintain your account, and to do all other things required for providing our services, such as enabling collaboration, providing website and mail hosting, and backing up and restoring your data;') }}
                </li>
                <li>
                    {{ __('To understand how users use our products and services, to monitor and prevent problems, and to improve our products and services;') }}
                </li>
                <li>
                    {{ __('To provide customer support, and to analyze and improve our interactions with customers;') }}
                </li>

                <li>
                    {{ __('To detect and prevent fraudulent transactions and other illegal activities, to report spam, and to protect the rights and interests of SINFONIASUBLIME DISTRIBUTION, SINFONIASUBLIME DISTRIBUTION’s users, third parties and the public;') }}
                </li>
                <li>
                    {{ __('To update, expand and analyze our records, identify new customers, and provide products and services that may be of interest to you;') }}
                </li>

                <li>
                    {{ __('To analyze trends, administer our websites, and track visitor navigations on our websites to understand what visitors are looking for and to better help them;') }}
                </li>
                <li>
                    {{ __('To monitor and improve marketing campaigns and make suggestions relevant to the user.') }}
                </li>

            </ul>

            <h3>{{ __('Legal bases for collecting and using information') }}</h3>
            <p>
                {{ __('Legal processing bases applicable to SINFONIASUBLIME DISTRIBUTION : If you are an individual from the European Economic Area (EEA), our legal basis for information collection and use depends on the personal information concerned and the context in which we collect it. Most of our information collection and processing activities are typically based on') }} <br>
                <ol type="i">
                    <li>{{ __('contractual necessity,') }}</li>
                    <li> {{ __('one or more legitimate interests of SINFONIASUBLIME DISTRIBUTION or a third party that are not overridden by your data protection interests, or') }}</li>
                    <li>{{ __('your consent. Sometimes, we may be legally required to collect your information, or may need your personal information to protect your vital interests or those of another person.') }}</li>
                    
                </ol>
                 
                {{ __('Withdrawal of consent : Where we rely on your consent as the legal basis, you have the right to withdraw your consent at any time, but this will not affect any processing that has already taken place.') }} <br>
                {{ __('Legitimate interests notice : Where we rely on legitimate interests as the legal basis and those legitimate interests are not specified above, we will clearly explain to you what those legitimate interests are at the time that we collect your information.') }}

            </p>

            <h3>{{ __('Your choice in information use') }}</h3>
            <p>
                {{ __('Opt out of non-essential electronic communications : You may opt out of receiving newsletters and other non-essential messages by using the ‘unsubscribe’ function included in all such messages. However, you will continue to receive notices and essential transactional emails.') }} <br>
                {{ __('Disable cookies : You can disable browser cookies before visiting our websites. However, if you do so, you may not be able to use certain features of the websites properly.') }} <br>
                {{ __('Optional information : You can choose not to provide optional profile information such as your photo. You can also delete or change your optional profile information.') }}
                

            </p>
            <h3>{{ __('Who we share your information with') }}</h3>
            <p>
                {{ __('We share your information only in the ways that are described in this Privacy Policy, and only with parties who adopt appropriate confidentiality and security measures.') }} <br>
                {{ __('Employees and independent contractors : Employees and independent contractors have access to the information covered in Part I on a need-to-know basis. We require all employees and independent contractors of SINFONIASUBLIME DISTRIBUTION group entities to follow this Privacy Policy for personal information that we share with them.') }} <br>
                {{ __('Third-party service providers : We may need to share your personal information and aggregated or de-identified information with third-party service providers that we engage, such as marketing and advertising partners, event organizers, web analytics providers and payment processors. These service providers are authorized to use your personal information only as necessary to provide these services to us.') }} <br>
                {{ __('Other cases : Other scenarios in which we may share the same information covered under Parts I and II are described in Part III.') }}

            </p>

            <h3> {{ __('Your rights with respect to information we hold about you as a controller') }}</h3>
            <p>
               
                {{ __('If you are in the European Economic Area (EEA), you have the following rights with respect to information that SINFONIASUBLIME DISTRIBUTION holds about you. SINFONIASUBLIME DISTRIBUTION undertakes to provide you the same rights no matter where you choose to live.') }} <br>
                <b>{{ __('Right to access') }} :</b> {{ __('You have the right to access (and obtain a copy of, if required) the categories of personal information that we hold about you, including the information\'s source, purpose and period of processing, and the persons to whom the information is shared') }} <br>
                <b>{{ __('Right to rectification') }} :</b> {{ __('You have the right to update the information we hold about you or to rectify any inaccuracies. Based on the purpose for which we use your information, you can instruct us to add supplemental information about you in our database.') }} <br>
                <b>{{ __('Right to erasure') }} :</b> {{ __('You have the right to request that we delete your personal information in certain circumstances, such as when it is no longer necessary for the purpose for which it was originally collected.') }} <br>
                {{ __('Right to restriction of processing : You may also have the right to request to restrict the use of your information in certain circumstances, such as when you have objected to our use of your data but we need to verify whether we have overriding legitimate grounds to use it.') }} <br>
                <b>{{ __('Right to data portability') }} :</b> {{ __('You have the right to transfer your information to a third party in a structured, commonly used and machine-readable format, in circumstances where the information is processed with your consent or by automated means.') }} <br>
                <b>{{ __('Right to object') }} :</b> {{ __('You have the right to object to the use of your information in certain circumstances, such as the use of your personal information for direct marketing.') }} <br>
                <b>{{ __('Right to complain') }} :</b> {{ __('You have the right to complain to the appropriate supervisory authority if you have any grievance against the way we collect, use or share your information. This right may not be available to you if there is no supervisory authority dealing with data protection in your country.') }}

            </p>

            <h3>{{ __('Retention of information') }}</h3>
            <p>
                {{ __('We retain your personal information for as long as it is required for the purposes stated in this Privacy Policy. Sometimes, we may retain your information for longer periods as permitted or required by law, such as to maintain suppression lists, prevent abuse, if required in connection with a legal claim or proceeding, to enforce our agreements, for tax, accounting, or to comply with other legal obligations. When we no longer have a legitimate need to process your information, we will delete or anonymize your information from our active databases. We will also securely store the information and isolate it from further processing on backup discs until deletion is possible.') }}
                

            </p>
            <h3>{{ __('Part II – Information that independent contractors or providers process on our behalf') }}</h3>
            <p>
                <u>{{ __('Information entrusted to independent contractors or providers and purpose') }}</u>
            </p>
            <p>
                {{ __('Information provided in connection with services : We may entrust your information to independent contractors or providers we use in connection with providing our services or for providing technical support for our services. The data may either be stored on our servers when you use our services, or transferred or shared to us as part of a the services provided.') }}
            </p>
            <p>
                <u>{{ __('Who we share service data with') }}</u>
            </p>
            <p>
                
                {{ __('Third party sub-processors : In order to provide services and technical support for our products, SINFONIASUBLIME DISTRIBUTION engages other third parties .') }}
            </p>
            <p>
                {{ __('Employees and independent contractors : We may provide access to your service data to our employees and individuals who are independent contractors SINFONIASUBLIME DISTRIBUTION involved in providing the services (collectively our “employees”) so that they can') }} 
                <ol type="i">
                    <li>{{ __('identify, analyze and resolve errors') }},</li>
                    <li>{{ __('manually verify emails reported as spam to improve spam detection, or ') }}</li>
                    <li>{{ __('manually verify scanned images that you submit to us to verify the identities of rightsholders of distributed content. We ensure that access by our employees to your service data is restricted to specific individuals, and is logged. Our employees will also have access to data that you knowingly share with us for technical support or to import data into our products or services. We communicate our privacy and security guidelines to our employees and strictly enforce privacy safeguards within ') }}SINFONIASUBLIME DISTRIBUTION.
                        <br>

                    {{ __('Third-party integrations you have enabled : Most of our products and services support integrations with third-party products and services. Through these third-party integrations, you may be allowing the third party to access your service information and personal information about you. We encourage you to review the privacy practices of the third-party services and products before you enable integrations with them. ') }}<br>
                    {{ __('Other cases : Other scenarios in which we may share information that are common to information covered under Parts I and II are described in Part III.') }}
                    </li>
                    
                </ol>
                

            </p>
            <p>
                <u>{{ __('Retention of information') }}</u>
            </p>
            <p>
                {{ __('We hold the data in your account as long as you choose to use SINFONIASUBLIME DISTRIBUTION Services. Once you terminate your SINFONIASUBLIME DISTRIBUTION user account, your data will eventually get deleted from active database during the next clean-up that occurs once in 6 months. The data deleted from active database will be deleted from backups after 3 months.') }}
            </p>
            <p>
                <u>{{ __('Data subject requests') }}</u>
            </p>
            <p>
                {{ __('If you are from the European Economic Area and you believe that we store, use or process your information on behalf of one of our customers, please contact us if you would like to access, rectify, erase, restrict or object to processing, or export your personal data.') }}
            </p>

            <h2>{{ __('Part III – General') }}</h2>
            <h3>{{ __('Children’s personal information') }}</h3>
            <p>
                {{ __('Our products and services are not directed to individuals under 16. SINFONIASUBLIME DISTRIBUTION does not knowingly collect personal information from children who are under 16 years of age. If we become aware that a child under 16 has provided us with personal information, we will take steps to delete such information. If you believe that a child under 16 years has provided personal information to us, please write to us with the details, and we will take the necessary steps to delete the information we hold about that child.') }}
            </p>
            <h3>{{ __('How secure is your information') }}</h3>
            <p>
                {{ __('At SINFONIASUBLIME DISTRIBUTION, we take data security very seriously. We have taken steps to implement appropriate administrative, technical & physical safeguards to prevent unauthorized access, use, modification, disclosure or destruction of the information you entrust to us.') }}
            </p>
            <h3>{{ __('Disclosures in compliance with legal obligations') }}</h3>
            <p>
                {{ __('We may be required by law to preserve or disclose your personal information and service data to comply with any applicable law, regulation, legal process or governmental request, including to meet national security requirements.') }}
            </p>
            <h3>{{ __('Enforcement of our rights') }}</h3>
            <p>
                {{ __('We may disclose personal information and service data to a third party if we believe that such disclosure is necessary for preventing fraud, investigating any suspected illegal activity, enforcing our agreements or policies, or protecting the safety of our users.') }}
            </p>
            <h3>{{ __('Business Transfers') }}</h3>
            <p>
                {{ __('In the event that we sell our business or get acquired or merged, we will ensure that the acquiring entity is legally bound to honor our commitments to you. We will notify you via email or through a prominent notice on our website of any change in ownership or in the uses of your personal information and service data. We will also notify you about any choices you may have regarding your personal information and service data.') }}
            </p>
            <h3>{{ __('Compliance with this Privacy Policy') }}</h3>
            <p>
                {{ __('We make every effort, including periodic reviews, to ensure that personal information you provide is used in conformity with this Privacy Policy. If you have any concerns about our adherence to this Privacy Policy or the manner in which your personal information is used, kindly write to us. We\'ll contact you, and if required, coordinate with the appropriate regulatory authorities to effectively address your concerns.') }}
            </p>
            <h3>{{ __('Notification of changes') }}</h3>
            <p>
                {{ __('We may modify the Privacy Policy at any time, upon notifying you through a service announcement or by sending an email to your primary email address. If we make significant changes to the Privacy Policy that affect your rights, you will be provided with at least 30 days\' advance notice of the changes by email to your primary email address. If you think that the updated Privacy Policy affects your rights with respect to your use of our products or services, you may terminate your use by sending us an email within 30 days. Your continued use after the effective date of changes to the Privacy Policy will be deemed to be your agreement to the modified Privacy Policy. You will not receive email notification of minor changes to the Privacy Policy.') }}
            </p>
            <span class="text-center p-5">
                <h2>{{ __('Our contact information:') }}</h2>
                <p>
                    SINFONIASUBLIME DISTRIBUTION <br>
                    3700-164 São João Da Madeira (Portugal) <br>
                    Email: sinfoniasublimelda@gmail.com

                </p>
            </span>
            <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">{{ __('Accepted') }}</button>
          </div>
        </div>
      </div>
    </div>



    <!-- AntiFraudPolicy Modal -->
    <div class="modal fade" id="AntiFraudPolicy" >
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header bg-theme">
            <h5 class="modal-title text-white">{{ __('Anti-Fraud Policy') }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-dark">
            <h2 class="text-center">{{ __('Anti-Fraud Policy') }}</h2>
            <h3 class="text-center">{{ __('For End-Users') }}</h3>
            <h4>{{ __('Table of Contents') }}:</h4>
            <ol type="1">
                <li>{{ __('Introduction') }}</li>
                <li>{{ __('Definitions') }}</li>
                <li>{{ __('Policy') }}</li>
                <ul>
                    <li><a href="#what-dms">{{ __('What DMS are doing about it') }}</a></li>
                    <li><a href="#what-we">{{ __('What we are doing about it') }}</a></li>
                    <li>
                        <a href="#how-we-deal">{{ __('How we deal with suspected Fraud') }}</a>
                    </li>
                    <li>
                        <a href="#consequences">{{ __('The consequences of Fraudulent use of our Platform or Services') }}</a>
                    </li>

                </ul>
                <li>{{ __('Severity, Strike Policy and Account Blocking') }}</li>
                <ul>
                    <li>
                        <a href="#severity">{{ __('Severity') }}</a>
                    </li>
                    <li>
                        <a href="#strike-policy">{{ __('Strike Policy') }}</a>
                    </li>
                    <li>
                        <a href="#blocked-policy">{{ __('Blocked Account policy') }}</a>
                    </li>
                </ul>
                <li>{{ __('Withholding Royalties (“Escrow”) for blocked accounts') }}</li>
                <li>{{ __('Takedowns') }}</li>
            </ol>
            <h3>{{ __('Introduction') }}</h3>
            <p>
                {{ __('For the purpose of this Policy, the “End User” will be the person or legal entity that has entered into a contractual relationship with Us, accepting the Terms of Use and providing content that will be made available on Digital Streaming Platforms (or DSP). "We" or "Us" are the providers of the service, SINFONIASUBLIME DISTRIBUTION. ') }}<br>
            </p>
            <p>    
                {{ __('This Anti-Fraud Policy sets a course of action for the End Users of our platform and services, and defines the actions taken and consequences of Fraudulent behaviour. ') }}<br>
            </p>
            <p>
                {{ __('Specifically, the purpose of this Policy is to provide:') }}
            </p>

            <ul>
                <li>{{ __('A clear definition of what we mean by “Fraud”.') }}</li>
                <li>{{ __('A definitive statement to take the distance of fraudulent activity in all its forms.') }}</li>
                <li>{{ __('A summary to the End User’s responsibilities in avoiding fraudulent activities.') }}</li>
                <li>{{ __('Guidance to all parties involved as to action which should be taken when we, the DSP or any other third party suspect any fraudulent activity.') }}</li>
                <li>{{ __('Clear guidance as to responsibilities for conducting investigations into fraud-related activities.') }}</li>
                <li>{{ __('Protection to right holders in circumstances where they may be victimized as a consequence of fraudulent activities') }}</li>
                
            </ul>
            <p>
                {{ __('This document is intended to provide guidance and should be read in conjunction with:') }}
            </p>
            <ul>
                <li>{{ __('The Privacy Policy') }}</li>
                <li>{{ __('Terms of Use') }}</li>
            </ul>

            <h3>{{ __('Definitions') }}</h3>
            <p>
                <b>{{ __('End User') }}: </b>{{ __('Is the person or legal entity that has entered into a contractual relationship with SINFONIASUBLIME DISTRIBUTION for the use of the platform, accepting the Terms of Use and providing content that will be made available on DSP.') }} <br>
                <b>{{ __('End User Account') }}:</b> {{ __('Accounts owned and/or created by End Users.') }} <br>
                <b>{{ __('DSP') }}:</b> {{ __('Digital Streaming Platforms (such as Spotify, Apple Music, Tidal, etc.) or any other channel connected to Us by a contractual relationship.') }} <br>
                <b>{{ __('MDFS') }}:</b> {{ __('Monetization through Digital Fingerprinting Systems (i.e. YouTube Content ID, Facebook Rights Manager, among others)') }}. <br>
                <b>{{ __('Fraud') }}:</b> {{ __('Any activity contrary to the Law, the DSP Policies and/or our own. Particularly, but non-exclusively, we will categorize as Fraud the following activities:') }}

            </p>
            <ul>
                <li>{{ __('The unauthorized exploitation of material protected by Copyright (Copyright Infringement') }}).</li>
                <li>{{ __('The infringement of any Law that regulates the ownership of legal right holders') }}.</li>
                <li>{{ __('The use of (misleading) artist, band or label names or artwork which may create confusion or false expectations related to content which is served to consumers by DSP (i.e., Musical Spam and Misleading Content') }}).</li>
                <li>{{ __('The use of automated digital bots or other means to “click” on payment-generating links pretending to be consumers (i.e., Click Fraud), producing unnatural and fraudulent incomes') }}.</li>
                <li>{{ __('The upload of distorted music, silenced songs, or with any other deceptive features, also to generate revenues and other unauthorized activities which are in breach with the Terms of Use and/or the agreements we have with DSP') }}.</li>
                <li>{{ __('The use of manual or automated resources, bots or any other means with the intention to stream and monetize DSP content in violation with DSP terms and conditions') }}.</li>
                <li>{{ __('The use of manual or automated resources, bots or any other means to unlawfully monetise content through MDFS') }}.</li>
            </ul>   
            <p>
                <b>{{ __('Royalties') }}:</b> {{ __('Economic income/revenue that corresponds to the original(s) rightsholder(s). We differentiate between “legitimate royalties” which are the result of an actual and rightful exploitation of any content, and “illegitimate royalties” which are the result of any fraudulent exploitation or activity that generates illicit and unrightful income.') }} <br>
                <b>{{ __('Strike') }}:</b> {{ __('A Strike is a severity applied to any account that violates our Anti-Fraud Policy. They are separated into three tiers (Strike 1, 2 and 3), from lowest to highest severity respectively, and applied cumulatively. However, according to the impact of the violation, the highest severity shall be directly applied.') }}

            </p>
            <h3>{{ __('Policy') }}</h3>
            <p>
                
                {{ __('Fraud in all its forms is wrong and is unacceptable to us. This is because when fraud occurs:') }}

            </p>
            <ul>
                <li>{{ __('It is not just a loss to us and the DSP, but ultimately to other content creators, damaging their copyrights, reputation or reducing the royalty pool which is made available by the DSP to content creators.') }}</li>
                <li>{{ __('It may have a major impact on our reputation, our contracts with DSP and therefore again on other End Users using our Services.') }}</li>
            </ul>
            <p>
                {{ __('Our objective is to avoid and, if necessary, eliminate fraudulent usage of our Services. Any indications of fraud will be rigorously investigated and dealt with in a firm and controlled way.') }}
            </p>
            <ul>
                <li>
                    <h2 id="what-dms">{{ __('What DMS are doing about it') }}</h2>
                    {{ __('Most DSP use a mix of algorithms and human resources to scan their catalog to avoid potential fraud or unauthorized and artificial streams and abusive use of their service. Once they have identified fraudulent activity they take down the content and inform us about the case, reserving the right to withhold from future payments the amounts previously generated through suspicious activities.') }}
                </li>
                <li>
                    <h2 id="what-we">{{ __('What we are doing about it') }}</h2>
                    {{ __('We are actively taking action in the following fields:') }}
                </li>
                <ul>
                    <li>{{ __('We are automatically monitoring (historic) sales data to combine this with other information (i.e., artist profiles, End User information, social media, etc.), to detect possible irregular activity.') }}</li>
                    <li>{{ __('Our entire back catalog and all new tracks are fingerprinted and matched against several databases to avoid multiple uploads of the same song, uploads of “white noise”, “empty songs”, “copyrighted materials” and, in general, any unauthorized activity.') }}</li>
                    <li>{{ __('Our Quality Control (QC) processes are designed to track down the use of metadata that could potentially result in Musical Spam and Misleading Content or any other type of fraudulent activity.') }}</li>
                </ul>
                <li>
                    <h2 id="how-we-deal">{{ __('How we deal with suspected Fraud') }}</h2>
                    
                </li>
                <ul>
                    <li>{{ __('In case we detect or have suspicions of any unauthorized activity (including bot-generated streams, click fraud, music spam, abusive usage of MDFS, etc.) from a specific End User Account, we will warn the End User via our Strike Policy System, which may ultimately result in blocking of the involved End User Account.') }}</li>
                    <li>{{ __('Revenues received in connection with content that we believe, in our sole discretion, violate the Terms of Use, can be blocked and retained.') }}</li>

                    

                </ul>
                    <li>
                        <h2 id="consequences">{{ __('The consequences of Fraudulent use of our Platform or Services') }}</h2>
                    </li>
                <ul>
                    <li>{{ __('If an End User is deemed breaching the Terms of Use, we will have the right to terminate the contractual relationship.') }}</li>
                    <li>{{ __('Any amounts due to an End User from any DSP derived from any fraudulent or unauthorized use of the service may be recouped by withholding such amounts from future payments due to that same End User.') }}</li>
                    <li>{{ __('To the extent any fraudulent and/or infringing activities are determined to be caused by the End User’s actions, the End User may be held responsible for any costs incurred by us or our providers (including legal fees and expenses) in connection therewith. These costs, in addition to other remedies, may be deducted by Us from any future payments due to an End User.') }}</li>

                    
                    

                </ul>
            </ul>

            <h2>{{ __('Severity, Strike Policy and Blocking of Accounts') }}</h2>
            <ul>
                <li>
                    <h2 id="severity">{{ __('Severity') }}</h2>
                    <p>{{ __('Either during our QC processes, the sales confirmation process or through notifications received from DSP and/or third parties, we may detect issues of possible fraudulent content or Accounts.') }}</p>
                    <p>{{ __('Once possible fraudulent content or Accounts are detected, a strike will be applied and the End User Account may be blocked in the following cases, divided into 4 severity tiers, which we consider very severe:') }}</p>

                </li>
                <ul>
                    <li><b>F0:</b> {{ __('Critical issues related to an End User Account') }}</li>
                    <li><b>F1:</b> {{ __('Issues related to Click Fraud, Misleading, Musical Spam and/or Artificial Streams') }}</li>
                    <li><b>F2:</b> {{ __('Issues related to Copyright, Intellectual Property or Trademark') }}</li>
                    <li><b>F3:</b> {{ __('Issues related to Abusive Usage of MDFS') }}</li>
                </ul>
            </ul>
            <p class="ml-3">
                <u>F0: {{ __('Critical issues related to an End User Account') }}</u> <br>
                {{ __('Particularly, but non-exclusively, we will categorize as F0 the following:') }}

            </p>
            <ul>
                <ul>
                    <li>{{ __('An End User Account profile contains fake or deliberately incomplete information or unauthorized content and/or information that belongs to a third party.') }}</li>
                    <li>{{ __('Repeated, inconsistent IP activity versus declared country or address of origin on any given End User Account.') }}</li>
                    <li>{{ __('End Users, when required to present documents of any kind, send falsifications and/or deceptive, suspicious documents.') }}</li>
                    <li>{{ __('Any other signs that any End User is deliberately trying to avoid a correct identification or validation of identity or address.') }}</li>
                    <li>{{ __('Any End User account generating royalties without having any detailed profile information in “My account” page.') }}</li>
                </ul>

            </ul>

            <p class="ml-3">
               <u>F1: {{ __('Critical issues related to Click Fraud, Misleading, Musical Spam and/or Artificial Streams') }}</u> <br>
               {{ __('Particularly, but non-exclusively, we will categorize as F1 the following activities:') }}
            </p>

            <ul>
                <ul>
                    <li>{{ __('An Account contains releases from unknown artists which are generating a considerable number of streams (Click Fraud) or views and subsequently, revenues in a short period of time without a minimum, credible fanbase to support it.') }}</li>
                    <li>{{ __('Any sudden, suspicious uplift in sales without corresponding numbers in profile views or social media activity to support it.') }}</li>
                    <li>{{ __('Any signs of intention to take advantage of well known artists’ names, song titles or other copyrighted audiovisual content to attract consumers to click (Misleading).') }}</li>
                    <li>{{ __('Hiring a Streaming/Followers Growth Service in order to generate artificial, unnatural, revenue and popularity.') }}</li>

                    
                    
                    

                </ul>
            </ul>
            <p class="ml-3">
               <u>F2: {{ __('Issues related to Copyright, Intellectual Property or Trademark') }}</u> <br>
               {{ __('Particularly, but non-exclusively, we will categorize as F2 the following activities:') }}
            </p>
            <ul>
                <ul>
                    <li>{{ __('Whenever an impersonation of any artist, recording company, unauthorized use of trademarks, distinctive signs, song or album titles, etc., is confirmed.') }}</li>
                    <li>{{ __('A release contains copyrighted material from a Rightsholder who did not grant publishing permission to the End User.') }}</li>
                    <li>{{ __('We received a content infringement notification from a DSP and/or any third party in relation to a content that has been sent to DSP.') }}</li>
                    <li>{{ __('We receive a direct infringement claim from the original Rightsholder or his/her representative.') }}</li>

                    
                    
                    


                </ul>
            </ul>




            <p class="ml-3">
               <u>F3: {{ __('Issues related to abusive usage of MDFS') }}</u> <br>
               {{ __('Particularly, but non-exclusively, we will categorize as F3 the following activities:') }}
               
            </p>
            <ul>
                <ul>
                    <li>{{ __('Insert of an own original content within or among a third party’s original copyrighted content, with the intention of taking advantage of such content’s popularity, in order to generate higher income.') }}</li>
                    <li>{{ __('Artificial Streams/Plays applied to abusive usage of MDFS cases (i.e. the use of bots to generate false plays of a monetized content).') }}</li>
                    <li>{{ __('Any sudden, suspicious uplift in sales related to MDFS, without proper historical consistency or plausible reason.') }}</li>
                </ul>
            </ul>




            <p class="ml-3">
               {{ __('In case we detect one or more of these issues in the content of an End User Account, the End User will receive a ticket or notice, indicating we have detected potential infringing or unauthorized activity and informing the End User about its consequences, described in our Strike Policy below.               ') }}
            </p>
            <ul>
                <li>
                    <h2 id="strike-policy">{{ __('Strike Policy') }}</h2>
                    {{ __('In case We detect an F1, F2 and/or F3 issues in an End User Account, a strike is applied to the Account and additional actions from the End User may be required, such as:') }}
                </li>
                <ul>
                    <li>{{ __('Completing the information details in their “My Account” page.') }}</li>
                    <li>{{ __('Sending Us a copy of an identification document (passport or national ID).') }}</li>
                    <li>{{ __('In most cases, we also request artist profiles, website URLs, social media profiles, as well as any information from the artist in order to contrast this with the sales data.') }}</li>
                </ul>
            </ul>



            <p class="ml-3">
               {{ __('In case a strike is applied and the End User: a. deliberately ignores Our notice, b. refuses or cannot provide the requested information within 5 working days (counting from the day the notice is sent), c. the infringing or unauthorized activity is confirmed, a Strike will be applied to the End User Account, which will have the following consequences:') }}
               
               
            </p>
            <ul>
                <li><h3>{{ __('STRIKE 1') }}</h3></li>
                <ul>
                    <li>{{ __('End User is informed.') }}</li>
                    <li>{{ __('Takedown of questioned content.') }}</li>
                    <li>{{ __('Warning of royalty payment delay on 2nd strike and block on 3rd strike.') }}</li>
                </ul>
            </ul>



            <ul>
                <li><h3>{{ __('STRIKE 2') }}</h3></li>
                <ul>
                    <li>{{ __('End User is informed.') }}</li>
                    <li>{{ __('Takedown of questioned content.') }}</li>
                    <li>{{ __('Royalty payment delay: Any Royalty outpayment request will be processed with a delay of 3 months counting from the moment an outpayment is requested.') }}</li>
                    <li>{{ __('Warning that the account will be blocked and royalties will be kept in escrow if a 3rd strike is applied.') }}</li>
                </ul>
            </ul>

            <ul>
                <li><h3> {{ __('STRIKE 3') }}</h3></li>
                <ul>
                    <li>{{ __('End User is informed.') }}</li>
                    <li>{{ __('End User account is blocked.') }}</li>
                    <li>{{ __('The entire End User’s catalog will be taken down.') }}</li>
                    <li>{{ __('Legitimate royalties will be kept in escrow for a minimum of 24 months, and up to 5 years, in accordance with DSPs policies and the Spanish Civil Law. Illegitimate royalties will be returned to DSP.') }}</li>
                </ul>
            </ul>


            <ul>
                <li>
                    <h3 id="blocked-policy">{{ __('Blocked Account Policy ') }}</h3>
                    {{ __('In case an End User repeatedly violates our Terms of Use, this Anti-Fraud Policy and/or the agreements we have with DSP, we can proceed to block the End User Account. ') }}<br>
                    {{ __('This will have the following implications:') }}

                </li>

                
               
               
                

                <ul>
                    <li> {{ __('We may discontinue the contractual relationship with the End User.') }}</li>
                    <li>{{ __('The entire End User’s catalog will be taken down.') }}</li>
                    <li> {{ __('Blocked Accounts will not be able to access the platform and, therefore, enjoy our services.') }}</li>
                    <li> {{ __('Legitimate royalties are kept in escrow for a minimum of 24 months, and up to 5 years, in accordance with DSPs policies and the Spanish Civil Law, or until the dispute between claimant and claimed parties is solved.') }}</li>
                    <li>{{ __('In a context of a dispute, the disputing parties shall inform us about the result of the dispute, so we can determine what amounts should be returned to them, including incurred expenses or economic claims, penalties or compensations determined by Law. Once this process has concluded, and the escrow period has passed, any remaining funds will be released to be transferred to the End User (if claimed') }}).</li>
                </ul>
            </ul>





            <h3>{{ __('Withholding Royalties (“Escrow”) for blocked accounts:') }}</h3>
            <p>{{ __('Revenues in any End User Account that are received in connection with content that We believe, in our sole discretion, violate the Terms of Use may be blocked and withheld. The royalties will be held in escrow for a minimum of 24 months, and up to 5 years, in accordance with DSPs policies and the Spanish Civil Law or until the dispute between claimant and claimed parties is solved, in order to be able to respond in the following scenarios') }}:</p>
            <ul>
                <li><b>{{ __('Illegitimate Royalties Refund') }}:</b> {{ __('A claim from DSP is received, asking for a refund of the royalties in case any DSP deems the Royalties were generated through unauthorized or fraudulent activity. Please note that DSP contractually have the right to reclaim royalties during a timeframe of minimum 24 months, that is why we need to respect this minimum period as well') }}.</li>
                <li><b>{{ __('Legitimate Royalties Refund') }}:</b> {{ __('A claim from the legitimate rights holder is received, claiming the payout of the royalties that have been retained') }}.</li>

                

            </ul>
            <h3>{{ __('Takedowns') }}</h3>
            <p>
                {{ __('We will initiate takedowns of confirmed infringing content from End User Accounts, that is, all content that is involved in F0, F1, F2 and/or F3 issues. ') }}<br>
            </p>
            <p>
                {{ __('Regarding F3 issues, despite the fact that only a part of the End User’s content is confirmed to be fraud related, We, at our sole discretion, may initiate takedowns for the End User’s entire catalog. ') }}<br>
            </p>
            <p>
                {{ __('However, please also note that any content may be marked as suspicious by DSP at their sole discretion and may be taken down.') }}
            </p>


            <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">{{ __('Accepted') }}</button>
          </div>
        </div>
      </div>
    </div>

    

    


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('backend/app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('backend/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('backend/app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset('backend/app-assets/js/scripts/components.js') }}"></script>

    <script src="{{ asset('backend/app-assets/js/scripts/forms/select/form-select2.js') }}"></script>
    <script src="{{ asset('backend/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>



    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('backend/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>

    <script src="{{ asset('backend/app-assets/js/scripts/forms/validation/form-validation.js') }}"></script>

    <script src="{{ asset('backend/app-assets/js/scripts/extensions/toastr.js') }}"></script>
    <script src="{{ asset('backend/app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
    <!-- END: Theme JS-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

    @if(Session::has('flash_message_error'))
        <script>
            $(document).ready(function () {
                toastr.error('{!! session("flash_message_error") !!}', 'Danger Alert');
            });
        </script>
    @endif

    @if(Session::has('flash_message_success'))
        <script>
            $(document).ready(function () {
                toastr.success('{!! session("flash_message_success") !!}', 'Success Alert');
            });
        </script>
    @endif

    <script type="text/javascript">
        $(function () {


            $('#accept').click(function() {
                if ($('#submitbtn').is(':disabled')) {
                    $('#TeamOfUse').modal('show');
                } else {
                    $('#submitbtn').attr('disabled', 'disabled');
                }

                if ($("#accept").is(":checked")  && $("#acceptPolicy").is(":checked") && $("#acceptFraud").is(":checked"))
                {
                    $('#submitbtn').removeAttr('disabled');                
                }
            });

            $('#acceptPolicy').click(function() {
                if ($('#submitbtn').is(':disabled')) {
                    $('#PrivacyPolicy').modal('show');
                } else {
                    $('#submitbtn').attr('disabled', 'disabled');
                }

                if ($("#accept").is(":checked")  && $("#acceptPolicy").is(":checked") && $("#acceptFraud").is(":checked"))
                {
                    $('#submitbtn').removeAttr('disabled');                
                }
            });


            $('#acceptFraud').click(function() {
                if ($('#submitbtn').is(':disabled')) {
                    $('#AntiFraudPolicy').modal('show');
                } else {
                    $('#submitbtn').attr('disabled', 'disabled');
                }
                if ($("#accept").is(":checked")  && $("#acceptPolicy").is(":checked") && $("#acceptFraud").is(":checked"))
                {
                    $('#submitbtn').removeAttr('disabled');                
                }
            });

            
        });
    </script>
    
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->
    <script>
        $(document).ready(function(){
            $(function() {
                
                $(".Delete").click(function(){
                    var id = $(this).attr('rel');
                    var url = $(this).attr('rel1');
                    Swal.fire({
                      title: "{{ __('Are you sure?') }}",
                      text: "{{ __('You won\'t be able to revert this!') }}",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: "{{ __('Yes, delete it!') }}"
                    });
                    
                    $('.swal2-confirm').click(function(){
                        window.location.href = '{{route("home")}}'+ '/' + url +'/'+ id;
                    });
                });
            });


        });

        $(document).ready(function() {
            $('select').select2();
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            

            $('select[name="country"]').on('change', function(){
                var counrty_id = $(this).val();
                // alert(counrty_id);

                var uri = "{{ url('client/getPhone') }}" +'/'+ counrty_id;
                    
                if(counrty_id)
                {
                    $.ajax({
                        url: uri,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data){
                            $('select[name="phone_code"]').html('<option disabled="" value=""></option>');
                            $.each(data, function(key, value){
                                $('select[name="phone_code"]')
                                    .append('<option selected="" value="+'+key+'">+'+ value +'</option>');
                            });
                        }
                    });
                }
                else
                {
                    alert('error occurred');
                }

            });

        });
    </script>
</body>
<!-- END: Body-->

@endsection