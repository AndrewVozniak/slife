@extends('layouts.app')
@section('title', 'Політика конфіденційності')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/info.css') }}">
@endsection
@section('content')
    @include('components.header')

    <div class="container breadcrumbs">
        <a href="{{ route('home', ['locale' => App::currentLocale()])}}" class="breadcrumb">Головна</a>
        <img src="{{asset('storage/images/icons/breadcrumbs_arrow_right.svg')}}" alt="filter" class="param_image">
        <a href="{{ url()->current() }}" class="breadcrumb active">Оплата та доставка</a>
    </div>

    <div class="content_wrapper">
        <div class="container">
            <div class="info_wrapper">
                <div class="title__big">{{__('private_policy.privacy_policy')}}</div>
                <div class="info_text">
                    <p class="subtitle">{{__('private_policy.about_processing_and_protection')}}&#46;</p>

                    <p class="title" style="margin-bottom: 16px">{{__('private_policy.content.content')}}</p>
                    <div class="content_ol_list_wrapper">
                        <ol class="content_ol">
                            <li class="content_ol_li">{{__('private_policy.content.general_concepts')}}</li>
                            <li class="content_ol_li">{{__('private_policy.content.list_of_personal_data_bases')}}</li>
                            <li class="content_ol_li">{{__('private_policy.content.purpose_of_personal_data_processing')}}</li>
                            <li class="content_ol_li">{{__('private_policy.content.processing_order')}}</li>
                            <li class="content_ol_li">{{__('private_policy.content.location_of_personal_database')}}</li>
                            <li class="content_ol_li">{{__('private_policy.content.terms_of_disclosure_of_information')}}</li>
                            <li class="content_ol_li">{{__('private_policy.content.protection_of_personal_data')}}</li>
                            <li class="content_ol_li">{{__('private_policy.content.rights_of_the_subject')}}</li>
                            <li class="content_ol_li">{{__('private_policy.content.work_order')}}</li>
                            <li class="content_ol_li">{{__('private_policy.content.state_registration')}}</li>
                        </ol>
                    </div>

                    <div class="content_ol_list_2_wrapper">
                        <ol class="content_ol_2">
                            <li class="content_ol_li_2">
                                {{__('private_policy.content.general_concepts')}}
                                <ol>
                                    <li>{{__('private_policy.general_concepts.definition_of_terms')}}&#59;
                                        <ul>
                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.general_concepts.personal_data_base')}} &#8212;
                                                </span>
                                                <span>
                                                      {{__('private_policy.general_concepts.a_set_of_personal_data')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.general_concepts.responsible_person')}} &#8212;
                                                </span>
                                                <span>
                                                      {{__('private_policy.general_concepts.designated_person')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.general_concepts.owner_of_the_base')}} &#8212;
                                                </span>
                                                <span>
                                                      {{__('private_policy.general_concepts.legal_entity')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.general_concepts.state_register')}} &#8212;
                                                </span>
                                                <span>
                                                      {{__('private_policy.general_concepts.information_system')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.general_concepts.sources_of_personal_data')}} &#8212;
                                                </span>
                                                <span>
                                                      {{__('private_policy.general_concepts.reference_books')}}&#41;&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.general_concepts.consent')}} &#8212;
                                                </span>
                                                <span>
                                                      {{__('private_policy.general_concepts.manifestation_of_will')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.general_concepts.depersonalization')}} &#8212;
                                                </span>
                                                <span>
                                                      {{__('private_policy.general_concepts.extraction_of_information')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.general_concepts.processing')}} &#8212;
                                                </span>
                                                <span>
                                                      {{__('private_policy.general_concepts.processing_of_personal_data')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.general_concepts.personal_data')}} &#8212;
                                                </span>
                                                <span>
                                                      {{__('private_policy.general_concepts.information')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.general_concepts.manager_of_the_base')}} &#8212;
                                                </span>
                                                <span>
                                                      {{__('private_policy.general_concepts.natural_or_legal_person')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.general_concepts.subject_of_personal_data')}} &#8212;
                                                </span>
                                                <span>
                                                      {{__('private_policy.general_concepts.individual')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.general_concepts.third_party')}} &#8212;
                                                </span>
                                                <span>
                                                      {{__('private_policy.general_concepts.individual_or_legal_entity')}}&#59;
                                                </span>


                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.general_concepts.special_categories_of_data')}} &#8212;
                                                </span>
                                                <span>
                                                      {{__('private_policy.general_concepts.description_special_categories')}}&#59;
                                                </span>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        {{__('private_policy.general_concepts.this_regulation')}}&#46;
                                    </li>
                                </ol>
                            </li>

                            <li class="content_ol_li_2">
                                {{__('private_policy.content.list_of_personal_data_bases')}}
                                <ol>
                                    <li>{{__('private_policy.seller_is_owner')}}&#59;
                                        <ul>
                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.database_of_personal_data_of_counterparties')}}&#46;
                                                </span>
                                            </li>
                                        </ul>
                                    </li>
                                </ol>
                            </li>

                            <li class="content_ol_li_2">
                                {{__('private_policy.content.purpose_of_personal_data_processing')}}
                                <ol>
                                    <li>{{__('private_policy.ensuring_implementation')}}&#59;
                                    </li>
                                </ol>
                            </li>
                            <li class="content_ol_li_2">
                                {{__('private_policy.content.processing_order')}}
                                <ol>
                                    <li>{{__('private_policy.voluntary_expression_of_will')}}&#59;
                                    </li>

                                    <li>{{__('private_policy.consent_of_the_subject_of_personal_data')}}&#58;
                                        <ul style="margin-bottom: 0">
                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.paper_document')}}&#59;
                                                </span>
                                            </li>
                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.electronic_document')}}&#59;
                                                </span>
                                            </li>
                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.mark_on_the_document')}}&#59;
                                                </span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>{{__('private_policy.in_accordance_with_the_law')}}&#46;
                                    </li>
                                    <li>{{__('private_policy.message_from_the_subject')}}&#46;
                                    </li>
                                    <li>{{__('private_policy.personal_data_on_racial_or_ethnic_origin')}}&#46;
                                    </li>
                                </ol>
                            </li>

                            <li class="content_ol_li_2">
                                {{__('private_policy.content.location_of_personal_database')}}
                                <ol>
                                    <li>{{__('private_policy.personal_databases_are_located')}}&#46;
                                    </li>
                                </ol>
                            </li>


                            <li class="content_ol_li_2">
                                {{__('private_policy.content.terms_of_disclosure_of_information')}}
                                <ol>
                                    <li>{{__('private_policy.disclosure_of_information.access_order')}}&#46;
                                    </li>

                                    <li>{{__('private_policy.disclosure_of_information.access_to_personal_data')}}&#46;
                                    </li>

                                    <li>{{__('private_policy.disclosure_of_information.subject_of_relations')}}&#46;
                                    </li>

                                    <li>{{__('private_policy.disclosure_of_information.request_states')}}&#58;
                                        <ul style="margin-bottom: 0">
                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.disclosure_of_information.personal_data')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.disclosure_of_information.address')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.disclosure_of_information.other_information')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.disclosure_of_information.info_about_database')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.disclosure_of_information.info_about_data')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.disclosure_of_information.legal_basis')}}&#46;
                                                </span>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>{{__('private_policy.disclosure_of_information.deadline')}}&#46;
                                    </li>

                                    <li>{{__('private_policy.disclosure_of_information.access_delay')}}&#46;
                                    </li>

                                    <li>{{__('private_policy.disclosure_of_information.message')}}&#46;
                                    </li>

                                    <li>{{__('private_policy.disclosure_of_information.message_info')}}&#58;
                                        <ul style="margin-bottom: 0">
                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.disclosure_of_information.personal_data_official')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.disclosure_of_information.date_message')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.disclosure_of_information.reasons')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.disclosure_of_information.deadline_message')}}&#46;
                                                </span>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>{{__('private_policy.disclosure_of_information.refusal')}}&#46;
                                    </li>

                                    <li>{{__('private_policy.disclosure_of_information.refusal_info')}}&#58;
                                        <ul style="margin-bottom: 0">
                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.disclosure_of_information.person_denying_access')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.disclosure_of_information.date_message')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.disclosure_of_information.reason_for_refusal')}}&#46;
                                                </span>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>{{__('private_policy.disclosure_of_information.decision')}}&#46;
                                    </li>
                                </ol>
                            </li>
                            <li class="content_ol_li_2">
                                {{__('private_policy.content.protection_of_personal_data')}}

                                <ol>
                                    <li>{{__('private_policy.protection_of_personal_data.protection')}}&#46;
                                    </li>
                                    <li>{{__('private_policy.protection_of_personal_data.protection_methods')}}&#46;
                                        <p>{{__('private_policy.protection_of_personal_data.responsibilities')}}&#46;</p>
                                    </li>
                                    <li>{{__('private_policy.protection_of_personal_data.employees')}}&#58;
                                        <ul style="margin-bottom: 0">
                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.protection_of_personal_data.know_law')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.protection_of_personal_data.access_procedures')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.protection_of_personal_data.implementation')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.protection_of_personal_data.control')}}&#59;
                                                </span>
                                            </li>
                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.protection_of_personal_data.control_procedures')}}&#59;
                                                </span>
                                            </li>
                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.protection_of_personal_data.storage_of_documents')}}&#46;
                                                </span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>{{__('private_policy.protection_of_personal_data.performance_of_duties')}}&#58;
                                        <ul style="margin-bottom: 0">
                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.protection_of_personal_data.work_with_documents')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.protection_of_personal_data.copy_of_documents')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.protection_of_personal_data.organize_work')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.protection_of_personal_data.proposition')}}&#59;
                                                </span>
                                            </li>
                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.protection_of_personal_data.get_info')}}&#59;
                                                </span>
                                            </li>
                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.protection_of_personal_data.sign_documents')}}&#46;
                                                </span>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>{{__('private_policy.protection_of_personal_data.employees_must')}}&#46;
                                    </li>

                                    <li>{{__('private_policy.protection_of_personal_data.employees_must_know')}}&#46;
                                    </li>
                                    <li>{{__('private_policy.protection_of_personal_data.responsibility')}}&#46;
                                    </li>
                                    <li>{{__('private_policy.protection_of_personal_data.storage')}}&#46;
                                    </li>
                                </ol>
                            </li>
                            <li class="content_ol_li_2">
                                {{__('private_policy.content.rights_of_the_subject')}}

                                <ol>
                                    <li> {{__('private_policy.right.right')}}&#58;
                                        <ul style="margin-bottom: 0">
                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.right.location')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.right.receive_info')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.right.access')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.right.get_answer')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.right.require')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.right.require_2')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.right.protect')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.right.complain')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.right.apply')}}&#46;
                                                </span>
                                            </li>
                                        </ul>
                                    </li>
                                </ol>
                            </li>
                            <li class="content_ol_li_2">
                                {{__('private_policy.content.work_order')}}
                                <ol>
                                    <li>{{__('private_policy.requests.get_info')}}&#46;
                                    </li>

                                    <li>{{__('private_policy.requests.request')}}&#46;
                                    </li>

                                    <li>{{__('private_policy.requests.request_2')}}&#46;
                                        <p>
                                            {{__('private_policy.requests.request_3')}}&#58;
                                        </p>
                                        <ul style="margin-bottom: 0">
                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.requests.document_info')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.requests.other_info')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.requests.info_about_database')}}&#59;
                                                </span>
                                            </li>

                                            <li>
                                                <span class="text_500_16_black">
                                                     {{__('private_policy.requests.list_of_data')}}&#46;
                                                </span>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>{{__('private_policy.requests.term')}}&#46;
                                    </li>

                                    <li>{{__('private_policy.requests.for_days')}}&#46;
                                    </li>
                                </ol>
                            </li>
                            <li class="content_ol_li_2">
                                {{__('private_policy.content.state_registration')}}&#46;
                                <ol>
                                    <li>
                                        <span>{{__('private_policy.state_registration')}}</span>
                                        <span class="red_small">&#34;{{__('private_policy.low')}}&#34;</span>&#46;
                                    </li>
                                </ol>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection
