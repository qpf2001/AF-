<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HOME</title>
    <link rel="stylesheet" href="/css/commom.css" />
    <link rel="favicon icon" href="/qpf.ico" />
    <link rel="stylesheet" href="/css/index.css" />
     <link rel="stylesheet" href="/package/swiper-bundle.min.css"> 
  </head>
  <body>
     <!-- 头部开始 -->
    <header>
      <div class="nav-top">
        <div class="center">
          <div class="nav-top-fl">
            <p><a href="https://www.tmall.com/" target="blank">天猫首页</a></p>
            <p>喵，欢迎来到天猫</p>
            <a href="https://login.tmall.com/" target="blank">请登录</a>
            <a href="https://register.tmall.com" target="blank">免费注册</a>
          </div>
          <div class="nav-top-fr">
            <ul>
              <li>
                <a href="https://i.taobao.com/" target="blank">我的淘宝</a>
                <div class="box">
                  <a href="https://cart.taobao.com/" target="blank">
                    已买到的宝贝
                  </a>
                  <a href="https://cart.taobao.com/" target="blank">
                    已卖出的宝贝
                  </a>
                </div>
              </li>
              <li>
                <a href="https://cart.taobao.com/" target="blank">我的购物车</a>
              </li>
              <li>
                <a href="https://shoucang.taobao.com/" target="blank">收藏夹</a>
                <div class="box">
                  <a href="https://cart.taobao.com/" target="blank">
                    收藏的店铺
                  </a>
                  <a href="https://cart.taobao.com/" target="blank">
                    收藏的宝贝
                  </a>
                </div>
              </li>
              <li>
                <a href="https://pages.tmall.com/" target="blank">手机版</a>
                <div class="box">
                  <img src="/images/tianmao.png" alt="" />
                </div>
              </li>
              <li>
                <a href="https://www.taobao.com/" target="blank">淘宝网</a>
              </li>
              <li>
                <a href="https://login.taobao.com/" target="blank">商家支持</a>
                <div class="box">
                  <p>商家:</p>
                  <p>
                    <a href="">商家中心</a>
                    <a href="">天猫规则</a>
                  </p>
                  <p>
                    <a href="">商家入住</a>
                    <a href="">运营服务</a>
                  </p>
                  <p>
                    <a href="">商家品控</a>
                    <a href="">商家工具</a>
                  </p>
                  <p>
                    <a href="">天猫智库</a>
                    <a href="">喵言喵语</a>
                  </p>
                  <div class="box-bot">
                    <p>帮助:</p>
                    <p>
                      <a href="">帮助中心</a>
                      <a href="">问商友</a>
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <a href="https://huodong.taobao.com/" target="blank">
                  网站导航
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="head center">
        <div class="logo">
          <a href="/index.html" title="阿峰男装">阿峰男装</a>
        </div>
        <div class="search">
          <input
            type="text"
            name=""
            id="text_1"
            value="搜索 天猫 商品/品牌/店铺"
          />
          <button>搜索</button>
        </div>
        <div class="shotcar">
          <img src="/images/shotcar.png" alt="" />
          <a href="https://cart.taobao.com/">我的购物车</a>
        </div>
      </div>
      <div class="head-bot center">
        <ul>
          <li><a href="/index.html">首页</a></li>
          <li><a href="/all product/11.html" target="blank">所有产品</a></li>
          <li>
            <a href="/shirt/2020-12-12/19.html" target="blank">长袖衬衫</a>
          </li>
          <li><a href="/trousers/15.html" target="blank">精品裤装</a></li>
          <li>
            <a href="/suit/2020-12-12/13.html" target="blank">正品西装</a>
          </li>
          <li>
            <a href="/shoes/2020-12-12/14.html" target="blank">商务皮鞋</a>
          </li>
          <li><a href="/ornaments/16.html" target="blank">配饰</a></li>
          <li><a href="/dress/2020-12-12/18.html" target="blank">礼服</a></li>
          <li><a href="/short-t/17.html" target="blank">短袖</a></li>
        </ul>
      </div>
    </header>
    <!--头部结束 -->
 <!-- banner模块 -->
  <div class="banner">
    <!-- Swiper -->
    <div class="banner">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><a href="/suit/2020-12-12/13.html"><img src="/images/xz.jpg" alt=""></a></div>
          <div class="swiper-slide"><a href="/suit/2020-12-12/13.html"><img src="/images/chenshan.png" alt=""></a></div>
          <div class="swiper-slide"><a href="/suit/2020-12-12/13.html"><img src="/images/x.jpg" alt=""></a></div>
          <div class="swiper-slide"><a href="/suit/2020-12-12/13.html"><img src="/images/csban.jpg" alt=""></a></div>
          <div class="swiper-slide"><a href="/suit/2020-12-12/13.html"><img src="/images/ps.jpg" alt=""></a></div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
      <!-- Swiper JS -->
      <script src="/package/swiper-bundle.min.js"></script>
      <!-- Initialize Swiper -->
      <script>
        var swiper = new Swiper('.swiper-container', {
          spaceBetween: 30,
          centeredSlides: true,
          autoplay: {
            delay: 2500,
            disableOnInteraction: false,
          },
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        });
      </script>
    </div>
  </div>
  <!-- banner模块 -->
  <!-- 优惠券模块开始 -->
  <div class="coupon">
    <div class="coupon-ban">
      <img src="/images/yhq.jpg" alt="" />
      <div class="coupon-img">
        <a href="/coupon/7.html" target="blank">
          <img src="/images/yhq1.png" alt="" />
        </a>
        <a href="/coupon/8.html" target="blank">
          <img src="/images/yhq2.png" alt="" />
        </a>
        <a href="/coupon/9.html" target="blank">
          <img src="/images/yhq3.png" alt="" />
        </a>
        <a href="/coupon/10.html" target="blank">
          <img src="/images/yhq4.png" alt="" />
        </a>
      </div>
    </div>
  </div>
  <!-- 优惠券模块结束 -->

  <!-- 1精选专辑模块开始 -->
  <div class="selected">
    <div class="fl">
      <img src="/images/you.png" alt="" />
      <img src="/images/zuo.png" alt="" />
    </div>
    <div class="selected-cont center">
      <ul class="clearfix">
        <li>
          <a href="/suit/2020-12-12/13.html">
            <img src="/images/time.jpg" alt="" />
          </a>
        </li>
        <li>
          <a href="/suit/2020-12-12/13.html">
            <img src="/images/time1.jpg" alt="" />
          </a>
        </li>
        <li>
          <a href="/suit/2020-12-12/13.html">
            <img src="/images/time2.jpg" alt="" />
          </a>
        </li>
        <li>
          <a href="/suit/2020-12-12/13.html">
            <img src="/images/t2.png" alt="" />
          </a>
        </li>
        <li>
          <a href="/suit/2020-12-12/13.html">
            <img src="/images/xz1.jpg" alt="" />
          </a>
        </li>
        <li>
          <a href="/suit/2020-12-12/13.html">
            <img src="/images/xz2.jpg" alt="" />
          </a>
        </li>
        <li>
          <a href="/suit/2020-12-12/13.html">
            <img src="/images/xz3.jpg" alt="" />
          </a>
        </li>
        <li>
          <a href="/suit/2020-12-12/13.html">
            <img src="/images/t2.png" alt="" />
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- 1精选专辑模块结束 -->

  <!--视频模块开始-->
  <div class="mp4 center">
    <div class="mp4-top">
      <div class="fl">
        <i></i>
        <i></i>
        <i></i>
      </div>
      <p>AUTUMN #</p>
    </div>
    <video autoplay loop muted controls width="1200px">
      <source src="/OZJv9Yr3I3RaKHIqAXH_234811175444_hd_hq.mp4" />
    </video>
  </div>
  <!--视频模块结束-->

  <!-- 甄选品类模块开始 -->
  <div class="category">
    <div class="category-cont center">
      <ul>
        <li>
          <a href="/suit/2020-12-12/13.html">
            <img src="/images/time.jpg" alt="" />
          </a>
          <p><a href="/suit/2020-12-12/13.html">西装套服</a></p>
        </li>
        <li>
          <a href="/shoes/2020-12-12/14.html">
            <img src="/images/p2.png" alt="" />
          </a>
          <p><a href="/shoes/2020-12-12/14.html">商务皮鞋</a></p>
        </li>
        <li>
          <a href="/dress/2020-12-12/18.html">
            <img src="/images/t2.png" alt="" />
          </a>
          <p><a href="/dress/2020-12-12/18.html">礼服</a></p>
        </li>
        <li>
          <a href="/short-t/17.html"><img src="/images/t3.png" alt="" /></a>
          <p><a href="/short-t/17.html">短袖</a></p>
        </li>
        <li>
          <a href="/trousers/15.html"><img src="/images/k1.png" alt="" /></a>
          <p><a href="/trousers/15.html">休闲西裤</a></p>
        </li>
        <li>
          <a href="/shirt/2020-12-12/19.html">
            <img src="/images/t1.png" alt="" />
          </a>
          <p><a href="/shirt/2020-12-12/19.html">长袖衬衫</a></p>
        </li>
      </ul>
      <div class="more"><a href="#">&lt;&lt; MORE &gt;&gt;</a></div>
    </div>
  </div>
  <!-- 甄选品类模块结束 -->

  <!-- 2精选专辑模块开始 -->
  <div class="selected-two">
    <div class="selected-two-cont">
      <ul>
        <li>
          <a href="/shirt/2020-12-12/19.html">
            <img src="/images/t1.png" alt="" />
          </a>
          <p><a href="/shirt/2020-12-12/19.html">免烫系列 ></a></p>
        </li>
        <li>
          <a href="/shoes/2020-12-12/14.html">
            <img src="/images/p1.png" alt="" />
          </a>
          <p><a href="/shoes/2020-12-12/14.html">精英系列 ></a></p>
        </li>
        <li>
          <a href="/short-t/17.html"><img src="/images/t3.png" alt="" /></a>
          <p><a href="/short-t/17.html">换季特卖 ></a></p>
        </li>
        <li>
          <a href="/dress/2020-12-12/18.html">
            <img src="/images/t2.png" alt="" />
          </a>
          <p><a href="/dress/2020-12-12/18.html">优品甄选 ></a></p>
        </li>
        <li>
          <a href="/trousers/15.html"><img src="/images/k1.png" alt="" /></a>
          <p><a href="/trousers/15.html">新品发布 ></a></p>
        </li>
        <li>
          <a href="/shoes/2020-12-12/14.html">
            <img src="/images/p1.png" alt="" />
          </a>
          <p><a href="/shoes/2020-12-12/14.html">精英系列 ></a></p>
        </li>
        <li>
          <a href="/short-t/17.html"><img src="/images/t3.png" alt="" /></a>
          <p><a href="/short-t/17.html">换季特卖 ></a></p>
        </li>
      </ul>
    </div>
  </div>
  <!-- 2精选专辑模块开始 -->

  <!-- 简介模块开始 -->
  <div class="jianjie">
    <a href="index.html"></a>
  </div>
  <!-- 简介模块开始 -->
      <!-- 底部模块开始 -->
    <footer>
      <div class="foot center">
        <div class="foot-top">
          <ul>
            <li>
              <img src="/images/zheng.png" alt="" />
              <div class="box-top">
                <p>正品保障</p>
                <p>正品保障，提供发票</p>
              </div>
            </li>
            <li>
              <img src="/images/che.png" alt="" />
              <div class="box-top">
                <p>极速物流</p>
                <p>急速物流，急速送达</p>
              </div>
            </li>
            <li>
              <img src="/images/bao.png" alt="" />
              <div class="box-top">
                <p>无忧售后</p>
                <p>7天无理由退换货</p>
              </div>
            </li>
            <li>
              <img src="/images/lian.png" alt="" />
              <div class="box-top">
                <p>特色服务</p>
                <p>私人定制家电套餐</p>
              </div>
            </li>
            <li>
              <img src="/images/wen.png" alt="" />
              <div class="box-top">
                <p>帮助中心</p>
                <p>您的购物指南</p>
              </div>
            </li>
          </ul>
        </div>
        <div class="foot-cont">
          <dl>
            <dt>购物指南</dt>
            <dd>购物流程</dd>
            <dd>会员介绍</dd>
            <dd>生活旅行/团购</dd>
            <dd>常见问题</dd>
            <dd>联系客服</dd>
          </dl>
          <dl>
            <dt>配送方式</dt>
            <dd>上门自提</dd>
            <dd>211限时达</dd>
            <dd>配送服务查询</dd>
            <dd>配送费收取标准</dd>
            <dd>海外配送</dd>
          </dl>
          <dl>
            <dt>支付方式</dt>
            <dd>货到付款</dd>
            <dd>在线支付</dd>
            <dd>分期付款</dd>
            <dd>邮局汇款</dd>
            <dd>公司转账</dd>
          </dl>
          <dl>
            <dt>售后服务</dt>
            <dd>售后政策</dd>
            <dd>价格保护</dd>
            <dd>退款说明</dd>
            <dd>返修/退换货</dd>
            <dd>取消订单</dd>
          </dl>
          <dl>
            <dt>特色服务</dt>
            <dd>夺宝岛</dd>
            <dd>DIY装机</dd>
            <dd>延保服务</dd>
            <dd>品优购E卡</dd>
            <dd>品优购通信</dd>
          </dl>
        </div>
        <div class="foot-bot">
          <ul>
            <li><a href="">关于我们</a></li>
            <li><a href="">联系我们</a></li>
            <li><a href="">联系客服</a></li>
            <li><a href="">商家入驻</a></li>
            <li><a href="">营销中心</a></li>
            <li><a href="">友情链接</a></li>
            <li><a href="/404.html">销售联盟</a></li>
          </ul>
          <p>
            <地址：安阳职业技术学院xxxxxxxxxxxxxxx 邮编：100096
            电话：400-618-4000 传真：010-82935100 邮箱: zhanghj+itcast.cn/p>
          </p>
          <p>京ICP备08001421号京公网安备110108007702</p>
        </div>
      </div>
    </footer>
    <!-- 底部模块结束 -->
    <script type="text/javascript">
      window.onload = function () {
        var text = document.getElementById('text_1')

        //获得焦点
        text.onfocus = function () {
          if (this.value == '搜索 天猫 商品/品牌/店铺') {
            this.value = ''
          }
        }
        //失去焦点
        text.onblur = function () {
          if (this.value == '' || this.value !== '搜索 天猫 商品/品牌/店铺') {
            this.value = '搜索 天猫 商品/品牌/店铺'
          }
        }

        var text = document.getElementById('text_2')
        //获得焦点
        text.onfocus = function () {
          if (this.value == '在当前结果搜索') {
            this.value = ''
          }
        }
        //失去焦点
        text.onblur = function () {
          if (this.value == '' || this.value !== '在当前结果搜索') {
            this.value = '在当前结果搜索'
          }
        }
      }
    </script>
 
  </body>
</html>
