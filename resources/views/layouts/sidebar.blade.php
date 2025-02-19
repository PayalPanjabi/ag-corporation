<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                <li class="menu-title" data-key="t-menu">@lang('translation.Menu')</li>

                <li>
                    <a href="index">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">@lang('translation.Dashboard')</span>
                    </a>
                </li>
                
                <!-- admin -->
                
                @if(Auth::user()->role == "admin")

                <li>
                    <a href="admin.quotation-request">
                        <i class="fas fa-hand-pointer" style="font-size: 1.02rem;"></i>
                        <span data-key="t-dashboard">@lang('translation.Quotation_Request')</span>
                    </a>
                </li>
                @endif

                @if(Auth::user()->role == "admin")

                <li>
                    <a href="admin.boq-request">
                        <i class="fas fa-hand-pointer" style="font-size: 1.02rem;"></i>
                        <span data-key="t-dashboard">@lang('translation.BOQ_Request')</span>
                    </a>
                </li>
                @endif
                
                @if(Auth::user()->role == "admin")

               <!-- <li>
                    <a href="admin.product-master">
                        <i class="fas fa-hand-pointer" style="font-size: 1.02rem;"></i>
                        <span data-key="t-dashboard">@lang('translation.Product_Master')</span>
                    </a>
                </li>-->
              	<li>
                  	<a href="javascript: void(0);" class="has-arrow">
                       <i class="fas fa-hand-pointer" style="font-size: 1.02rem;"></i>
                       <span data-key="t-invoices">@lang('translation.Product_Master')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('product.index') }}"
                                        data-key="t-invoice-list">@lang('translation.Product_Master_list')</a></li>
                                <li><a href="{{ route('category.index') }}"
                                        data-key="t-invoice-list">@lang('translation.add_category')</a></li>
                                <li><a href="admin.manage-product-subCategory"
                                        data-key="t-invoice-list">@lang('translation.add_sub_category')</a></li>
                                <li><a href="{{ route('manufacture.index') }}"
                                        data-key="t-invoice-detail">@lang('translation.add_manufacturing_name')</a></li>
                               <li><a href="{{ route('unit.index') }}"
                                        data-key="t-invoice-detail">@lang('translation.add_unit')</a></li>
                     </ul>
                 </li>
                @endif

                
                
                <!--  -->
 				@if(Auth::user()->role == "admin")
                <li>
                    <a href="admin.component">  
                        <i data-feather="box" style="font-size: 1.02rem;"></i>
                        <span data-key="t-dashboard">@lang('translation.Component')</span>
                    </a>
                </li>
               @endif
              
                <!--  -->
                @if(Auth::user()->role == "admin")

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">@lang('translation.Creation')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <!-- <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <span data-key="t-invoices">@lang('translation.Product')</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                
                                <li><a href=""
                                    data-key="t-invoice-list">@lang('translation.Pump_Catalog_Selection')</a>
                                </li>
                                <li><a href="admin.HP"
                                        data-key="t-invoice-list">@lang('translation.HP')</a></li>
                                <li><a href="admin.product-hp"
                                        data-key="t-invoice-detail">@lang('translation.No_Of_Pump')</a></li>
                            </ul>
                        </li> -->
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <span data-key="t-invoices">@lang('translation.Pump_Catalog_Selection')</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="admin.add-products"
                                        data-key="t-invoice-list">@lang('translation.Add_Pump')</a></li>
                                <li><a href="admin.manage_products"
                                        data-key="t-invoice-list">@lang('translation.Manage_Pump')</a></li>
                                <li><a href="admin.hp_products"
                                        data-key="t-invoice-list">@lang('translation.HP')</a></li>
                               
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <span data-key="t-invoices">@lang('translation.Panel_Incomer_Selection')</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="admin.incomer-products"
                                        data-key="t-invoice-list">@lang('translation.Indication')</a></li>
                                <li><a href="admin.volt-meter"
                                        data-key="t-invoice-list">@lang('translation.Volt_Meter')</a></li>
                                <li><a href="admin.ammeter"
                                        data-key="t-invoice-list">@lang('translation.Ammeter')</a></li>
                                <li><a href="admin.SPP"
                                        data-key="t-invoice-detail">@lang('translation.SPP')</a></li>
                                <li><a href="admin.hooter"
                                        data-key="t-invoice-detail">@lang('translation.Hooter')</a></li>
                                <li><a href="admin.feeder-ammeter"
                                        data-key="t-invoice-detail">@lang('translation.Feeder_Ammeter')</a></li>
                                <li><a href="admin.switch-make"
                                        data-key="t-invoice-detail">@lang('translation.Switch_Make')</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <span data-key="t-invoices">@lang('translation.Section_1')</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="admin.panel-location"
                                        data-key="t-invoice-list">@lang('translation.Panel_Location')</a></li>
                                <li><a href="admin.panel-colour"
                                        data-key="t-invoice-list">@lang('translation.Panel_Colour')</a></li>
                                <li><a href="admin.busbar"
                                        data-key="t-invoice-list">@lang('translation.Busbar')</a></li>
                                <li><a href="admin.cable-entry"
                                        data-key="t-invoice-detail">@lang('translation.Cable_Entry')</a></li>
                                <li><a href="admin.type1-type2"
                                        data-key="t-invoice-detail">@lang('translation.Type1_Type2')</a></li>
                              
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <span data-key="t-invoices">@lang('translation.Section_2')</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="admin.cable-make"
                                        data-key="t-invoice-list">@lang('translation.Cable_Make')</a></li>
                                <li><a href="admin.access"
                                        data-key="t-invoice-list">@lang('translation.Access')</a></li>
                                <li><a href="admin.mounting"
                                        data-key="t-invoice-list">@lang('translation.Mounting')</a></li>
                                <li><a href="admin.panel-type"
                                        data-key="t-invoice-detail">@lang('translation.Panel_Type')</a></li>
                               
                            </ul>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="admin.regional-list">
                        <i class="fas fa-users" style="font-size: 1.02rem;"></i>
                        <span data-key="t-dashboard">@lang('translation.Regional_List')</span>
                    </a>
                </li>
                <li>
                    <a href="admin.employee-list">
                        <i class="fas fa-users" style="font-size: 1.02rem;"></i>
                        <span data-key="t-dashboard">@lang('translation.Employee_List')</span>
                    </a>
                </li>
                <li>
                    <a href="admin.customer-list">
                        <i class="fas fa-users" style="font-size: 1.02rem;"></i>
                        <span data-key="t-dashboard">@lang('translation.Customer_List')</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                    <i class="fas fa-user" style="font-size: 1.02rem;"></i>
                        <span data-key="t-apps">@lang('translation.System_User')</span>
                    </a>
                   
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="admin.add-role">
                                <span data-key="t-chat">@lang('translation.Add_Role')</span>
                            </a>
                        </li>
                        <li>
                            <a href="admin.add-user">
                                <span data-key="t-dashboard">@lang('translation.Add_User')</span>
                            </a>
                        </li>
                    </ul>

                </li>
        @endif

                <!-- user -->
                @if(Auth::user()->role == "user")

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">@lang('translation.Apps_User')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <!-- <li>
                            <a href="apps-calendar">
                                <span data-key="t-calendar">@lang('translation.Calendar')</span>
                            </a>
                        </li>

                        <li>
                            <a href="apps-chat">
                                <span data-key="t-chat">@lang('translation.Chat')</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <span data-key="t-email">@lang('translation.Email')</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="apps-email-inbox" data-key="t-inbox">@lang('translation.Inbox')</a></li>
                                <li><a href="apps-email-read"
                                        data-key="t-read-email">@lang('translation.Read_Email')</a></li>
                            </ul>
                        </li> -->
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <span data-key="t-invoices">@lang('translation.Quotation')</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="user.apps-quotation-list"
                                        data-key="t-invoice-list">@lang('translation.Quotation_List')</a></li>
                                <li><a href="user.apps-quotation-detail"
                                        data-key="t-invoice-detail">@lang('translation.Quotation_Detail')</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <span data-key="t-invoices">@lang('translation.BOQ')</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="user.apps-boq-list"
                                        data-key="t-invoice-list">@lang('translation.BOQ_List')</a></li>
                                <li><a href="user.apps-boq-detail"
                                        data-key="t-invoice-detail">@lang('translation.BOQ_Detail')</a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <span data-key="t-contacts">@lang('translation.Contacts')</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <!-- <li><a href="apps-contacts-grid"
                                        data-key="t-user-grid">@lang('translation.User_Grid')</a></li>
                                <li><a href="apps-contacts-list"
                                        data-key="t-user-list">@lang('translation.User_List')</a></li> -->
                                <li><a href="user.apps-contacts-profile"
                                        data-key="t-profile">@lang('translation.Profile')</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                @endif
                @if(Auth::user()->role == "user")

                <li>
                    <a href="user.order-history">
                        <i class="fas fa-history" style="font-size: 1.02rem;"></i>
                        <span data-key="t-dashboard">@lang('translation.Order_History')</span>
                    </a>
                </li>
                @endif
                @if(Auth::user()->role == "user")

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="users"></i>
                        <span data-key="t-authentication">@lang('translation.Authentication')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="user.auth-login" data-key="t-login">@lang('translation.Login')</a></li>
                        <li><a href="user.auth-register" data-key="t-register">@lang('translation.Register')</a></li>
                        <li><a href="user.auth-recoverpw"
                                data-key="t-recover-password">@lang('translation.Recover_Password')</a></li>
                        <!-- <li><a href="user.auth-lock-screen" data-key="t-lock-screen">@lang('translation.Lock_Screen')</a>
                        </li> -->
                        <li><a href="user.auth-logout" data-key="t-logout">@lang('translation.Logout')</a>
                        </li>
                       
                    </ul>
                </li>
                @endif

                <!-- <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="file-text"></i>
                        <span data-key="t-pages">@lang('translation.Pages')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter" data-key="t-starter-page">@lang('translation.Starter_Page')</a></li>
                        <li><a href="pages-maintenance" data-key="t-maintenance">@lang('translation.Maintenance')</a>
                        </li>
                        <li><a href="pages-comingsoon" data-key="t-coming-soon">@lang('translation.Coming_Soon')</a>
                        </li>
                        <li><a href="pages-timeline" data-key="t-timeline">@lang('translation.Timeline')</a></li>
                        <li><a href="pages-faqs" data-key="t-faqs">@lang('translation.FAQs')</a></li>
                        <li><a href="pages-pricing" data-key="t-pricing">@lang('translation.Pricing')</a></li>
                        <li><a href="pages-404" data-key="t-error-404">@lang('translation.Error_404')</a></li>
                        <li><a href="pages-500" data-key="t-error-500">@lang('translation.Error_500')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="layouts-horizontal">
                        <i data-feather="layout"></i>
                        <span data-key="t-horizontal">@lang('translation.Horizontal')</span>
                    </a>
                </li> -->

                <!-- <li class="menu-title mt-2" data-key="t-components">@lang('translation.Elements')</li> -->

                <!--<li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="briefcase"></i>
                        <span data-key="t-components">@lang('translation.Components')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts" data-key="t-alerts">@lang('translation.Alerts')</a></li>
                        <li><a href="user.ui-buttons" data-key="t-buttons">@lang('translation.Buttons')</a></li>
                        <li><a href="user.ui-cards" data-key="t-cards">@lang('translation.Cards')</a></li>
                        <li><a href="ui-carousel" data-key="t-carousel">@lang('translation.Carousel')</a></li>
                        <li><a href="ui-dropdowns" data-key="t-dropdowns">@lang('translation.Dropdowns')</a></li>
                        <li><a href="ui-grid" data-key="t-grid">@lang('translation.Grid')</a></li>
                        <li><a href="ui-images" data-key="t-images">@lang('translation.Images')</a></li>
                        <li><a href="ui-modals" data-key="t-modals">@lang('translation.Modals')</a></li>
                        <li><a href="ui-offcanvas" data-key="t-offcanvas">@lang('translation.Offcanvas')</a></li>
                        <li><a href="ui-progressbars" data-key="t-progress-bars">@lang('translation.Progress_Bars')</a>
                        </li>
                        <li><a href="ui-tabs-accordions"
                                data-key="t-tabs-accordions">@lang('translation.Tabs_n_Accordions')</a></li>
                        <li><a href="ui-typography" data-key="t-typography">@lang('translation.Typography')</a></li>
                        <li><a href="ui-video" data-key="t-video">@lang('translation.Video')</a></li>
                        <li><a href="user.ui-general" data-key="t-general">@lang('translation.General')</a></li>
                        <li><a href="ui-colors" data-key="t-colors">@lang('translation.Colors')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="gift"></i>
                        <span data-key="t-ui-elements">@lang('translation.Extended')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="extended-lightbox" data-key="t-lightbox">@lang('translation.Lightbox')</a></li>
                        <li><a href="extended-rangeslider"
                                data-key="t-range-slider">@lang('translation.Range_Slider')</a></li>
                        <li><a href="extended-sweet-alert"
                                data-key="t-sweet-alert">@lang('translation.SweetAlert_2')</a></li>
                        <li><a href="extended-session-timeout"
                                data-key="t-session-timeout">@lang('translation.Session_Timeout')</a></li>
                        <li><a href="extended-rating" data-key="t-rating">@lang('translation.Rating')</a></li>
                        <li><a href="extended-notifications"
                                data-key="t-notifications">@lang('translation.Notifications')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);">
                        <i data-feather="box"></i>
                        <span class="badge rounded-pill bg-soft-danger text-danger float-end">7</span>
                        <span data-key="t-forms">@lang('translation.Forms')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="user.form-elements" data-key="t-form-elements">@lang('translation.Basic_Elements')</a>
                        </li>
                        <li><a href="user.form-validation" data-key="t-form-validation">@lang('translation.Validation')</a>
                        </li>
                        <li><a href="user.form-advanced" data-key="t-form-advanced">@lang('translation.Advanced_Plugins')</a>
                        </li>
                        <li><a href="user.form-editors" data-key="t-form-editors">@lang('translation.Editors')</a></li>
                        <li><a href="user.form-uploads" data-key="t-form-upload">@lang('translation.File_Upload')</a></li>
                        <li><a href="user.form-wizard" data-key="t-form-wizard">@lang('translation.Wizard')</a></li>
                        <li><a href="user.form-mask" data-key="t-form-mask">@lang('translation.Mask')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="sliders"></i>
                        <span data-key="t-tables">@lang('translation.Tables')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="user.tables-basic" data-key="t-basic-tables">@lang('translation.Bootstrap_Basic')</a>
                        </li>
                        <li><a href="user.tables-datatable" data-key="t-data-tables">@lang('translation.DataTables')</a></li>
                        <li><a href="user.tables-responsive"
                                data-key="t-responsive-table">@lang('translation.Responsive')</a></li>
                        <li><a href="user.tables-editable" data-key="t-editable-table">@lang('translation.Editable')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="pie-chart"></i>
                        <span data-key="t-charts">@lang('translation.Charts')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="user.charts-apex" data-key="t-apex-charts">@lang('translation.Apexcharts')</a></li>
                        <li><a href="user.charts-echart" data-key="t-e-charts">@lang('translation.Echarts')</a></li>
                        <li><a href="user.charts-chartjs" data-key="t-chartjs-charts">@lang('translation.Chartjs')</a></li>
                        <li><a href="user.charts-knob" data-key="t-knob-charts">@lang('translation.Jquery_Knob')</a></li>
                        <li><a href="user.charts-sparkline" data-key="t-sparkline-charts">@lang('translation.Sparkline')</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="cpu"></i>
                        <span data-key="t-icons">@lang('translation.Icons')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="icons-boxicons" data-key="t-boxicons">@lang('translation.Boxicons')</a></li>
                        <li><a href="icons-materialdesign"
                                data-key="t-material-design">@lang('translation.Material_Design')</a></li>
                        <li><a href="icons-dripicons" data-key="t-dripicons">@lang('translation.Dripicons')</a></li>
                        <li><a href="user.icons-fontawesome"
                                data-key="t-font-awesome">@lang('translation.Font_Awesome_5')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="map"></i>
                        <span data-key="t-maps">@lang('translation.Maps')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="maps-google" data-key="t-g-maps">@lang('translation.Google')</a></li>
                        <li><a href="maps-vector" data-key="t-v-maps">@lang('translation.Vector')</a></li>
                        <li><a href="maps-leaflet" data-key="t-l-maps">@lang('translation.Leaflet')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="share-2"></i>
                        <span data-key="t-multi-level">@lang('translation.Multi_Level')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);" data-key="t-level-1-1">@lang('translation.Level_1_1')</a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow"
                                data-key="t-level-1-2">@lang('translation.Level_1_2')</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);"
                                        data-key="t-level-2-1">@lang('translation.Level_2_1')</a></li>
                                <li><a href="javascript: void(0);"
                                        data-key="t-level-2-2">@lang('translation.Level_2_2')</a></li>
                            </ul>
                        </li>
                    </ul>
                </li> -->

            </ul>

            <!-- <div class="card sidebar-alert border-0 text-center mx-4 mb-0 mt-5">
                <div class="card-body">
                    <img src="assets/images/giftbox.png" alt="">
                    <div class="mt-4">
                        <h5 class="alertcard-title font-size-16">@lang('translation.Unlimited_Access')</h5>
                        <p class="font-size-13">
                            @lang("translation.Upgrade_your_plan_from_a_Free_trial,_to_select_‘Business_Plan’").</p>
                        <a href="#!" class="btn btn-primary mt-2">@lang('translation.Upgrade_Now')</a>
                    </div>
                </div>
            </div> -->
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
