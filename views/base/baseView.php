
<div class="wrapper-mask" id="wrapper-mask"></div>
<div class="wrapper" id="wrapper" >
    <div class="layout-left" >
        <div class="left-sidebar">
                <div style="position: relative;height: 100%;" class="layout-footer">
                    <div class="l-sb-item l-sb-item-selfInfo footer-item" style="border: none;position: relative" >
<!--                        smile-前端-显示头像-->
                        <?php if(strpos($avatar,'http') !==false) { ?>
                            <img class="useravatar selfInfo info-avatar-<?php echo $user_id;?>"  src="<?php echo $avatar;?>" style="background-color: #c9c9c9;" />
                        <?php } else if($avatar) { ?>
                            <img class="useravatar selfInfo info-avatar-<?php echo $user_id;?>"  src="./index.php?action=http.file.downloadFile&fileId=<?php echo $avatar;?>&returnBase64=0" style="background-color: #c9c9c9;" />
                        <?php } else { ?>
                            <img class="useravatar selfInfo info-avatar-<?php echo $user_id;?>"  src="../../public/img/msg/default_user.png" style="background-color: #c9c9c9;" />
                        <?php } ?>
                    </div>
                    <script>
                        window.onload=function () {
                            var referrer_url = document.referrer;
                            if (referrer_url.indexOf("https://www.weile9.com/activity_detail/") != -1) {
                                // $('.layout-left').hide();
                                // $(".msg-chat-dialog").show();
                                // chatsession_row_first();
                                dddddd();
                            }
                            var get_type = "<?php echo !empty($_GET['type']) ? $_GET['type'] : 0;?>";
                            if (get_type == "index") {
                                // $('.layout-left').hide();
                                // $(".msg-chat-dialog").show();
                                // chatsession_row_first();
                                dddddd();
                            }
                        }

                        function dddddd() {
                            var action  = "api.site.config";
                            var reqData = {};
                            handleClientSendRequest(action, reqData, ccc);
                        }
                        function ccc(params)
                        {
                            var config = params.config;
                            localStorage.setItem(siteConfigKey, JSON.stringify(config));

                            DefaultTitle = config.name;
                            document.title = config.name;
                            var serverAddressForApi = config.serverAddressForApi;
                            localStorage.setItem(apiUrl, serverAddressForApi);
                            var loginPluginProfile = params.loginPluginProfile;
                            var webSocketGwDomain = config[siteConfigKeys.serverAddressForIM];
                            auth();
                            localStorage.setItem(siteLoginPluginKey, JSON.stringify(loginPluginProfile))
                            landingPageUrl = loginPluginProfile.landingPageUrl;

                            try{
                                displayFrontPage();
                            }catch (error) {

                            }
                            chatsession_row_first();

                        }


                        function chatsession_row_first() {
                            var roomType = $('.chatsession-row').first().attr("roomType");
                            var chatSessionId = $('.chatsession-row').first().attr("chat-session-id");
                            localStorage.setItem(chatSessionIdKey, chatSessionId);
                            $(".right-chatbox").attr("chat-session-id", chatSessionId);
                            if(roomType == U2_MSG) {
                                localStorage.setItem(chatSessionId, U2_MSG);
                                getFriendProfileByClickChatSessionRow($('.chatsession-row').first());
                            } else if(roomType == GROUP_MSG) {
                                localStorage.setItem(chatSessionId, U2_MSG);
                                getGroupProfileByClickChatSessionRow($('.chatsession-row').first());
                            }
                            getInitChatPlugin(roomType);
                            updateRoomChatSessionContent(chatSessionId);
                            addActiveForRoomList($('.chatsession-row').first());

                            $(".msg-chat-dialog")[0].style.display = "block";
                            // $("#wrapper")[0].style.display = "none";
                            $(".layout-left").hide();

                            // smile 点击消息列表顶上
                            msgBoxScrollToBottom();
                        }
                    </script>
                    
                    <!--     home     -->
                    <div class="hint--right footer-item" aria-label="主页" data-local="aria-label:homeTip" <?php if($user_id != "bd15b026302b225fdf9784210998370dcd63cfc0"){echo '';}?>>
                        <div class="l-sb-item " data="home">
                            <img src="<?php echo $siteAddress?>/public/img/msg/home_icon.png" data="unselect" class="home-unselect item-img"/>
                            <img src="<?php echo $siteAddress?>/public/img/msg/home_icon_select.png" data="select" class="home-select item-img"
                                 style="display: none;"/>
                        </div>
                    </div>
                    <!--     chats     -->
                    <div class="hint--right footer-item" aria-label="消息" data-local="aria-label:chatSessionTip">
                        <div class="l-sb-item l-sb-item-active" data="chatSession" >
                            <img src="<?php echo $siteAddress?>/public/img/msg/chatsession.png" data="select" class="chatSession-select item-img "/>
                            <img src="<?php echo $siteAddress?>/public/img/msg/chatsession_unselect.png" data="unselect" class="chatSession-unselect  item-img" style="display: none;"/>
                            <div style="display: none" class="room-list-msg-unread unread-num"></div>
                            <div style="display: none"  class="room-list-msg-unread-mute unread-num-mute"></div>
                        </div>
                    </div>

                    <!--     friends     -->
                    <div class=" hint--right footer-item" aria-label="好友" data-local="aria-label:friendTip">
                        <div class="l-sb-item"  data="friend" >
                            <img src="<?php echo $siteAddress?>/public/img/msg/friend_unselect.png" data="unselect" class="friend-unselect item-img" />
                            <img src="<?php echo $siteAddress?>/public/img/msg/friend.png" data="select" class="friend-select item-img" style="display: none;"/>
                            <div style="display: none" class="apply-friend-list apply_friend_list_num" style="display: none;"></div>
                        </div>
                    </div>
					
                    <!--     groups     -->
                    <div class=" hint--right footer-item" aria-label="群聊" data-local="aria-label:groupTip">
                        <div class="l-sb-item "  data="group" >
                            <img src="<?php echo $siteAddress?>/public/img/msg/group_chat_unselect.png" data="unselect" class="group-unselect item-img" />
                            <img src="<?php echo $siteAddress?>/public/img/msg/group_chat.png" data="select" class="group-select item-img" style="display: none;"/>
                        </div>
                    </div>
                </div>
        </div>

        <div class="left-body">
            <div class="search_group_friend">
                <div style="width: 94%;">
                    <img src="<?php echo $siteAddress?>/public/img/msg/search_icon.png">
                    <input type="text" placeholder="搜索" onkeydown="searchGroupAndFriendByKeyDown(event)" class="search_for_group_friend">
                    <img src="<?php echo $siteAddress?>/public/img/msg/btn-x.png" style="left:93%;top:3rem;" onclick="deleteSearchInfo()">
                </div>
            </div>
            <div class="left-body-container">

                <!-- home -->
                <div class="left-body-home home-page left-body-item" style="position: relative;display: none;">
                    <div style="width: 100%;" class="home-tools">
                        <div class="" style="font-size: 14px;color: #666666; margin: 14px 0 6px 20px">
                            <span data-local-value="miniProgramTip">小程序列表</span>
                        </div>
                    </div>

                    <div style="position: absolute;width: 100%;margin:0 auto;">
                        <div class="mini-program-row" style="overflow-y: scroll;position: relative;">


                        </div>
                    </div>
                </div>

                <!-- chats -->
                <div class="left-body-chatsession chatsession-lists left-body-item" style="position: relative;">
                </div>

                <!-- groups -->
                <div class="left-body-groups group-lists left-body-item"  style="display: none;position: relative;">
                        <div style="width: 100%;" class="group-tools">
                            <div class="pw-contact-row create-group" >
                                <div class="pw-contact-row-image" style="position: relative;">
                                    <img src="<?php echo $siteAddress?>/public/img/msg/create_group.png" />
                                </div>
                                <div class="pw-contact-row-name" data-local-value="createGroupTip">创建群聊</div>
                            </div>
                            <div class="group-list-div"><span  data-local-value="groupListTip">群聊列表</span><span style="margin-left: 0.5rem;" class="group-count"></span></div>
                        </div>
                        <div style="position: absolute;width: 100%;margin:0 auto;height: 100%;">
                            <div class="group-list-contact-row" style="overflow-y: scroll;position: relative;">
                            </div>
                        </div>
                </div>

                <!-- friends -->
                <div class="left-body-friends friend-lists left-body-item"  style="display: none;">
                    <div style="width: 100%;" class="friend-tools">
                            <div class="pw-contact-row  search-user" >
                                <div class="pw-contact-row-image" style="position: relative;">
                                    <img src="<?php echo $siteAddress?>/public/img/msg/search_add_friend.png" />
                                </div>
                                <div class="pw-contact-row-name" data-local-value="searchTip">添加好友</div>
                            </div>
                            <div class="pw-contact-row  apply-friend-list" >
                                <div class="pw-contact-row-image" style="position: relative;">
                                    <img src="<?php echo $siteAddress?>/public/img/msg/apply_list.png" />
                                    <div  class="apply-friend-list apply_friend_num" style="display: none;" ></div>
                                </div>
                                <div class="pw-contact-row-name new-friends-apply" data-local-value="newFriendsTip">新朋友</div>
                            </div>
                        <div class="friend-list-div" ><span data-local-value="friendListTip">好友列表</span><span style="margin-left: 0.5rem;" class="friend-count"><span></div>
                    </div>
                    <div style="width: 100%;position: absolute;margin:0 auto;height:100%;">
                        <div class="friend-list-contact-row" style="overflow-y: scroll;position: relative">
                        </div>
                    </div>
                </div>


                <!-- search friends -->
                <div class="left-body-search-list search-friend-group-lists left-body-item"  style="display: none;">
                    <div class="search-friend-group-lists-div" style="width: 28.14rem;position: absolute;margin:0 auto;height: 100%;">
                        <div class="search-list-contact-row" style="overflow-y: scroll;position: relative">
                           <div class="search-friend-div">
                               <div class="friend-list-div" ><span data-local-value="friendListTip">好友</span></div>
                               <div class="search_display_friend">
                               </div>
                               <div class="search_see_friend_all_tip display_all_friend" style="display: none" >
                                   <span>查看全部</span> <span class="search_friend_count"></span>
                               </div>
                               <div class="search_hidden_friend" style="display: none">
                               </div>
                               <div class="search_see_friend_all_tip hide_all_friend" style="display: none" >
                                   <span>收起</span>
                               </div>
                           </div>

                            <div class="search-group-div">
                                <div class="group-list-div" ><span data-local-value="GroupListTip">群组</span></div>
                                <div class="search_display_group">
                                </div>
                                <div class="search_see_group_all_tip display_all_group" style="display: none" >
                                    <span>查看全部</span> <span class="search_group_count"></span>
                                </div>
                                <div class="search_hidden_group" style="display: none">
                                </div>
                                <div class="search_see_group_all_tip hide_all_group" style="display: none" >
                                    <span>收起</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

