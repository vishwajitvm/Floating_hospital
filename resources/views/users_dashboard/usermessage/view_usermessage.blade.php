@extends('users_dashboard.user_master')
@section('user')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
        <!-- Content Header (Page header) -->	  
 

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <div class="box">
                        <div class="box-header with-border p-0">
                            <div class="form-element lookup">
                                <input class="form-control p-20 w-p100" type="text" placeholder="Search Contact">
                            </div>
                        </div>

                        <div class="box-body p-0">
                            <div id="chat-contact" class="media-list media-list-hover media-list-divided ">
                            <div class="media media-single">
                                <a href="#" class="avatar avatar-lg status-success">
                                <img src="{{asset('backend/images/avatar/avatar-1.png')}}" alt="...">
                                </a>

                                <div class="media-body">
                                <h6><a href="#">Hossein Shams</a></h6>
                                <small class="text-green">Online</small>
                                </div>
                            </div>

                            <div class="media media-single">
                                <a href="#" class="avatar avatar-lg status-success">
                                <img src="{{asset('backend/images/avatar/avatar-2.png')}}" alt="...">
                                </a>

                                <div class="media-body">
                                <h6><a href="#">Maryam Amiri</a></h6>
                                <small class="text-warning">Away</small>
                                </div>
                            </div>

                            <div class="media media-single">
                                <a href="#" class="avatar avatar-lg status-success">
                                <img src="{{asset('backend/images/avatar/avatar-12.png')}}" alt="...">
                                </a>

                                <div class="media-body">
                                <h6><a href="#">Sarah Conner</a></h6>
                                <small class="text-danger">Busy</small>
                                </div>
                            </div>

                            <div class="media media-single">
                                <a href="#" class="avatar avatar-lg status-success">
                                <img src="{{asset('backend/images/avatar/avatar-4.png')}}" alt="...">
                                </a>

                                <div class="media-body">
                                <h6><a href="#">Frank Camly</a></h6>
                                <small class="text-danger">Busy</small>
                                </div>
                            </div>

                            <div class="media media-single">
                                <a href="#" class="avatar avatar-lg status-success">
                                <img src="{{asset('backend/images/avatar/avatar-5.png')}}" alt="...">
                                </a>

                                <div class="media-body">
                                <h6><a href="#">Ted Erricson</a></h6>
                                <small class="text-success">Online</small>
                                </div>
                            </div>

                            <div class="media media-single">
                                <a href="#" class="avatar avatar-lg status-success">
                                <img src="{{asset('backend/images/avatar/avatar-6.png')}}" alt="...">
                                </a>

                                <div class="media-body">
                                <h6><a href="#">Ranian Mostalik</a></h6>
                                <small class="text-success">Online</small>
                                </div>
                            </div>

                            <div class="media media-single">
                                <a href="#" class="avatar avatar-lg status-success">
                                <img src="{{asset('backend/images/avatar/avatar-7.png')}}" alt="...">
                                </a>

                                <div class="media-body">
                                <h6><a href="#">John Franklin</a></h6>
                                <small class="text-success">Online</small>
                                </div>
                            </div>

                            <div class="media media-single">
                                <a href="#" class="avatar avatar-lg status-success">
                                <img src="{{asset('backend/images/avatar/avatar-8.png')}}" alt="...">
                                </a>

                                <div class="media-body">
                                <h6><a href="#">Emma Larson</a></h6>
                                <small class="text-success">Online</small>
                                </div>
                            </div>

                            <div class="media media-single">
                                <a href="#" class="avatar avatar-lg status-success">
                                <img src="{{asset('backend/images/avatar/avatar-9.png')}}" alt="...">
                                </a>

                                <div class="media-body">
                                <h6><a href="#">Sarah Conner</a></h6>
                                <small class="text-danger">Busy</small>
                                </div>
                            </div>

                            <div class="media media-single">
                                <a href="#" class="avatar avatar-lg status-success">
                                <img src="{{asset('backend/images/avatar/avatar-10.png')}}" alt="...">
                                </a>

                                <div class="media-body">
                                <h6><a href="#">Frank Camly</a></h6>
                                <small class="text-danger">Busy</small>
                                </div>
                            </div>

                            <div class="media media-single">
                                <a href="#" class="avatar avatar-lg status-success">
                                <img src="{{asset('backend/images/avatar/avatar-11.png')}}" alt="...">
                                </a>

                                <div class="media-body">
                                <h6><a href="#">Ted Erricson</a></h6>
                                <small class="text-success">Online</small>
                                </div>
                            </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-9 col-12">
                    <div class="box direct-chat">
                        <div class="box-header with-border">
                            <h4 class="box-title">Chat Message</h4>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <!-- Conversations are loaded here -->
                            <div id="chat-app" class="direct-chat-messages chat-app">
                            <!-- Message. Default to the left -->
                            <div class="direct-chat-msg mb-30">
                                <div class="clearfix mb-15">
                                <span class="direct-chat-name">James Anderson</span>
                                <span class="direct-chat-timestamp pull-right">April 14, 2017</span>
                                </div>
                                <!-- /.direct-chat-info -->
                                <img class="direct-chat-img avatar" src="{{asset('backend/images/avatar/2.jpg')}}" alt="message user image">
                                <!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                <p>Hi</p>
                                <p>How are you ...???</p>
                                <p>What are you doing tomorrow?<br>Would you like to get out of the town for a while?</p>
                                <p class="direct-chat-timestamp"><time datetime="2018">23:58</time></p>
                                </div>

                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->

                            <!-- Message to the right -->
                            <div class="direct-chat-msg right mb-30">
                                <div class="clearfix mb-15">
                                <span class="direct-chat-name pull-right">You</span>
                                </div>
                                <div class="direct-chat-text">
                                <p>Hiii, I'm good.</p>
                                <p>How are you doing?</p>
                                <p>Long time no see!</p>
                                <p class="direct-chat-timestamp"><time datetime="2018">00:06</time></p>
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->

                            <div class="direct-chat-msg mb-30">
                                <img class="direct-chat-img avatar" src="{{asset('backend/images/avatar/2.jpg')}}" alt="message user image">
                                <!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                <p>Yeah</p>
                                <p>We were out of country for a vacation. We visited several beautiful countries and made a lot of memmories.</p> 
                                <p class="direct-chat-timestamp"><time datetime="2018">00:06</time></p>
                                </div>					

                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->

                            <!-- Message to the right -->
                            <div class="direct-chat-msg right mb-30">
                                <div class="direct-chat-text">
                                <p>That's awesome!</p>
                                <p>You should tell me everything with all small details. I'm so curious to hear your stories.</p>
                                <p>Did you take pictures?</p>
                                <p class="direct-chat-timestamp"><time datetime="2018">00:09</time></p>
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->

                            <div class="direct-chat-msg mb-30">
                                <div class="clearfix mb-15">
                                <span class="direct-chat-name">James Anderson</span>
                                <span class="direct-chat-timestamp pull-right">April 16, 2017</span>
                                </div>
                                <!-- /.direct-chat-info -->
                                <img class="direct-chat-img avatar" src="{{asset('backend/images/avatar/2.jpg')}}" alt="message user image">
                                <!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                <p>We took a loooot. Here is some of them, I'll show you the rest once we meet.</p>
                                <p class="popup-gallery">
                                    <a href="../images/gallery/thumb/4.jpg" title="Caption. Can be aligned to any side and contain any HTML.">
                                        <img src="../images/gallery/thumb/4.jpg" width="32.5%" alt="" />
                                    </a>
                                    <a href="../images/gallery/thumb/5.jpg" title="This image fits only horizontally.">
                                        <img src="../images/gallery/thumb/5.jpg" width="32.5%" alt="" />
                                    </a>
                                    <a href="../images/gallery/thumb/6.jpg">
                                        <img src="../images/gallery/thumb/6.jpg" width="32.5%" alt="" />
                                    </a>
                                </p>
                                <p class="direct-chat-timestamp"><time datetime="2018">00:09</time></p>
                                </div>					

                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->

                            <!-- Message to the right -->
                            <div class="direct-chat-msg right mb-30">
                                <div class="clearfix mb-15">
                                <span class="direct-chat-name pull-right">You</span>
                                </div>
                                <div class="direct-chat-text">
                                <p>These places are fantastic. Wish I could join you guys </p>
                                <p class="direct-chat-timestamp"><time datetime="2018">00:09</time></p>
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->

                            </div>
                            <!--/.direct-chat-messages-->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <form action="#" method="post">
                            <div class="input-group">
                                <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                    <div class="input-group-addon">
                                    <div class="align-self-end gap-items">
                                        <span class="publisher-btn file-group">
                                        <i class="fa fa-paperclip file-browser"></i>
                                        <input type="file">
                                        </span>
                                        <a class="publisher-btn" href="#"><i class="fa fa-smile-o"></i></a>
                                        <a class="publisher-btn" href="#"><i class="fa fa-paper-plane"></i></a>
                                    </div>
                                    </div>
                            </div>
                            </form>
                        </div>
                        <!-- /.box-footer-->
                        </div>
                </div>								
            </div>
        </section>
        <!-- /.content -->
        </div>
        
    </div>
    <!-- /.content-wrapper -->
    
@endsection
