
<script id="tpl-protocol-init" type="text/html">

<div class="zaly_protocol_init">
    <div class="zaly_protocol">
        <div class="zaly_protocol_title">
            用户协议及免责声明
        </div>
        <div class="zaly_protocol_content">
                        <textarea disabled>
提醒您：在使用软件前，请您务必仔细阅读并透彻理解本声明。

用户协议及免责声明

                        </textarea>
        </div>
    </div>
    <div class="zaly_protocol_operation">
        <button class="zaly_protocol_sure " data-local-value="agreeTip">同意并继续</button>
    </div>
    <div class="zaly_protocol_cancel" data-local-value="unagreeProtocolTip">不同意可直接关掉该浏览器</div>
</div>

</script>

<script id="tpl-upgrade-tip" type="text/html">
    <div class="zaly_site_upgrade">
        <div class="zaly_site_upgrade_title"></div>
        <div class="zaly_site_upgrade_tip"></div>
        <div class="zaly_site_upgrade_operation">
            <button class="zaly_site_upgrade_sure" data-local-value="upgradeNowTip"></button>
        </div>
        <div class="zaly_site_upgrade_cancel">
            <span onclick="newStepForCheckEnv('next_step')" style="font-size:1.13rem;font-family:PingFangSC-Regular;font-weight:400;color:#4C3BB1;cursor: pointer; " data-local-value="jumpUpgradeTip">跳过>></span>
        </div>
    </div>
</script>


<script id="tpl-check-site-environment" type="text/html">
    <div class="initDiv" >
        <div class="initHeader" style="">
            检测站点信息
        </div>
        <div class="initHeader-title">
            环境基础检测
        </div>
        <div class="init_check_info margin-top5 " isLoad="{{isPhpVersionValid}}">
            <div class="init_check">
                1.PHP版本大于5.6
            </div>
            <div class="init_check_result isPhpVersionValid">
                {{if isPhpVersionValid}}
                    <img src='../../public/img/init/check_success.png' />
                {{else}}
                    <img src='../../public/img//init/check_failed.png'  />
                {{/if}}
            </div>
        </div>

        <div class="init_check_info  ext_open_ssl" isLoad="isLoadOpenssl">
            <div class="init_check isLoadOpenssl">
                2.是否支持OpenSSL
            </div>
            <div class="init_check_result">
                {{if isLoadOpenssl}}
                <img src='../../public/img/init/check_success.png' />
                {{else}}
                <img src='../../public/img//init/check_failed.png'  />
                {{/if}}
            </div>
        </div>

        <div class="init_check_info justify-content-left ext_curl" isLoad="{{isLoadCurl}}">
            <div class="init_check isLoadCurl">
                3.是否安装Curl
            </div>
            <div class="init_check_result">
                {{if isLoadCurl}}
                <img src='../../public/img/init/check_success.png' />
                {{else}}
                <img src='../../public/img//init/check_failed.png'  />
                {{/if}}
            </div>
        </div>

        <div class="init_check_info justify-content-left  ext_is_write" isLoad="{{isWritePermission}}">
            <div class="init_check isWritePermission">
                4.当前目录写权限
            </div>
            <div class="init_check_result">
                {{if isWritePermission}}
                <img src='../../public/img/init/check_success.png' />
                {{else}}
                <img src='../../public/img//init/check_failed.png'  />
                {{/if}}
            </div>
        </div>
<!---
        <div class="init_check_info justify-content-left  ext_is_write" isLoad="{{isLoadProperties}}">
            <div class="init_check isLoadProperties">
                5.是否可以加载语言包
            </div>
            <div class="init_check_result">
                {{if isLoadProperties}}
                <img src='../../public/img/init/check_success.png' />
                {{else}}
                <img src='../../public/img//init/check_failed.png'  />
                {{/if}}
            </div>
        </div>
--->
        <div style="margin-top:4rem;  text-align: center;">
            <button class="previte_init_protocol" data-local-value="prevStepTip">上一步</button>
            <button class="next_init_data" style="background:rgba(201,201,201,1);"   data-local-value="nextStepTip">下一步</button>
        </div>
        <div style="text-align: center; margin-top:4rem;margin-bottom: 3rem;">
            <a class="phpinfo" href="./{{phpinfo}}" target="_blank"  data-local-value="phpinfoTip">查看当前PHP环境</a>
        </div>
</script>


<script id="tpl-init-data" type="text/html">
    <div class="initDiv ">
        <div class="initHeader" style="margin-top: 0rem;">
            数据初始化
        </div>
<!--        <div class="initHeader-setting">-->
<!--            请选择登录方式：-->
<!--            <select id="verifyPluginId">-->
<!--                <option class="selectOption" pluginId="102">本地账户密码校验</option>-->
<!--            </select>-->
<!--        </div>-->

        <div class="initHeader-setting">
            安装程序支持的配置
        </div>

        <div class="initHeader-sql">
            <div class="radioDiv" onclick="clickRadio('sqlite')">sqlite <span><img
                            src="../../public/img/init/select.png" class="dbType radioImg sqliteRadio" data="sqlite"
                            isSelected="1"> </span></div>
            <div class="radioDiv" onclick="clickRadio('mysql')">mysql <span><img
                            src="../../public/img/init/un_select.png" class="dbType radioImg mysqlRadio"
                            data="mysql" isSelected="0"></span></div>
        </div>


        <div class="init_check_info justify-content-left  ext_pdo_sqlite" isLoad="{{isLoadPDOSqlite}}" style="display: none;">
            <div class="init_check isLoadPDOSqlite">
                是否安装PDO_Sqlite
            </div>
            <div class="init_check_result">
                {{if isLoadPDOSqlite}}
                <img src='../../public/img/init/check_success.png' />
                {{else}}
                <img src='../../public/img//init/check_failed.png'  />
                {{/if}}
            </div>
        </div>


        <div class="init_check_info justify-content-left ext_pdo_mysql"  isLoad="{{isLoadPDOMysql}}" >
            <div class="init_check isLoadPDOMysql">
                是否安装PDO_Mysql
            </div>
            <div class="init_check_result">
                {{if isLoadPDOMysql}}
                <img src='../../public/img/init/check_success.png' />
                {{else}}
                <img src='../../public/img//init/check_failed.png'  />
                {{/if}}
            </div>
        </div>

        <div class="mysql-div">
            <!--       sql address         -->
            <div class="sql-setting mysql-setting">
                <span>数据库地址：</span>
                <input type="text" class="sql-input sql-dbHost" placeholder="数据库地址">
                <img src="../../public/img/init/failed.png" class="failed_img dbHostFailed">
            </div>
            <!--       sql port         -->
            <div class="sql-setting mysql-setting">
                <span>端口号：</span>
                <input type="text" class="sql-input sql-dbPort" placeholder="数据库端口号,默认：3306">
                <img src="../../public/img/init/failed.png" class="failed_img dbPortFailed">
            </div>
            <!--      sql name          -->
            <div class="sql-setting mysql-setting">
                <span>数据库名称：</span>
                <input type="text" class="sql-input sql-dbName" placeholder="数据库名称">
                <img src="../../public/img/init/failed.png" class="failed_img dbNameFailed">
            </div>
            <!--      sql user          -->
            <div class="sql-setting mysql-setting">
                <span>用户名：</span>
                <input type="text" class="sql-input sql-dbUserName" placeholder="数据库用户名">
                <img src="../../public/img/init/failed.png" class="failed_img dbUserNameFailed">
            </div>
            <!--      sql password          -->
            <div class="sql-setting mysql-setting">
                <span>数据库密码：</span><input type="password" class="sql-input sql-dbPassword" placeholder="数据库密码">
                <img src="../../public/img/init/failed.png" class="failed_img dbPasswordFailed">
            </div>
        </div>
        <div class="sqlite-div">
            <span style="width:6.57rem;height:1.31rem;font-size:1.31rem;font-family:PingFangSC-Regular;font-weight:400;color:rgba(102,102,102,1);line-height:1.31rem;margin-right: 1rem;">本地文件:</span>
            <select id="sqlite-file">
                <option class="selectOption" fileName="">创建新Sqlite数据库</option>
                    {{each dbFiles file }}
                        <option class="selectOption {{file}}" fileName="{{file}}">{{file}}</option>
                    {{/each}}
            </select>
        </div>



        <div class="initHeader-setting">
            管理员账号
        </div>
       <div>
           <div class="initHeader-admin">
               <span>用户名：</span><input type="text" class="admin-input admin_name">
               <img src="../../public/img/init/failed.png" class="admin_failed_img admin_name_failed">
           </div>
           <div class="initHeader-admin-tip">包含字母，长度5-24</div>

           <div class="initHeader-admin">
               <span>密码：</span><input type="password" class="admin-input admin_pwd">
               <img src="../../public/img/init/failed.png" class="admin_failed_img admin_pwd_failed">
           </div>
           <div class="initHeader-admin-tip">包含字母，长度8-32</div>

           <div class="initHeader-admin">
               <span>确认密码：</span><input type="password" class="admin-input admin_repwd">
               <img src="../../public/img/init/failed.png" class="admin_failed_img admin_repwd_failed">
           </div>


       </div>

        <div class="errorInfo">
        </div>

        <div class="d-flex flex-row justify-content-center init_data_btn" >
            <button class="previte_init_env" onclick="newStepForCheckEnv('data_init')" data-local-value="prevStepTip">Previous Step</button>
            <button type="button" class="btn login_button"><span class="span_btn_tip" data-local-value="initSiteTip">初始化站点</span></button>
        </div>
    </div>
</script>

<script id="tpl-error-info" type="text/html">
        {{errorInfo}}
        <a style='color:rgba(76,59,177,1);' target="_blank" href='https://duckchat.akaxin.com/wiki/server/faq-mysql.md'>数据库常见问题汇总</a>
    </script>
