<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Rainbond Static Demo</title>

    <meta
      name="description"
      content="Rainbond（云帮）是一款以应用为中心的开源PaaS，深度整合基于Kubernetes的容器管理、Service Mesh微服务架构最佳实践、多类型CI/CD应用构建与交付、多数据中心资源管理等技术，为用户提供云原生应用全生命周期解决方案，构建应用与基础设施、应用与应用、基础设施与基础设施之间互联互通的生态体系，满足支撑业务高速发展所需的敏捷开发、高效运维和精益管理需求。"
    />

    <meta name="author" content="goodrain" />

    <meta property="og:title" content="Rainbond Static Demo" />
    <meta
      property="og:description"
      content="Rainbond（云帮）是一款以应用为中心的开源PaaS，深度整合基于Kubernetes的容器管理、Service Mesh微服务架构最佳实践、多类型CI/CD应用构建与交付、多数据中心资源管理等技术，为用户提供云原生应用全生命周期解决方案，构建应用与基础设施、应用与应用、基础设施与基础设施之间互联互通的生态体系，满足支撑业务高速发展所需的敏捷开发、高效运维和精益管理需求。"
    />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="/" />
    <meta property="og:updated_time" content="2017-03-02T21:56:55&#43;01:00" />
    <link rel="canonical" href="/" />

    <link href="./static/css/font.css" rel="stylesheet" type="text/css" />
    <link href="./static/css/kube.min.css" rel="stylesheet" type="text/css" />
    <link
      href="./static/css/kube.legenda.css"
      rel="stylesheet"
      type="text/css"
    />
    <link href="./static/css/highlight.css" rel="stylesheet" type="text/css" />
    <link href="./static/css/master.css" rel="stylesheet" type="text/css" />
    <link href="./static/css/kube.demo.css" rel="stylesheet" type="text/css" />

    <link href="./static/css/custom.css" rel="stylesheet" type="text/css" />
    <link
      href="https://cdn.bootcss.com/jquery-jsonview/1.2.3/jquery.jsonview.css"
      rel="stylesheet"
    />
  </head>

  <body class="page-kube">
    <header>
      <div class="show-sm">
        <div id="nav-toggle-box">
          <div id="nav-toggle-brand">
            <a href="/" target="_blank">Rainbond</a>
          </div>
          <a
            data-component="toggleme"
            data-target="#top"
            href="#"
            id="nav-toggle"
            ><i class="kube-menu"></i
          ></a>
        </div>
      </div>
      <div class="hide-sm" id="top">
        <div id="top-brand">
          <a href="/" target="_blank" title="home">Rainbond</a>
        </div>
        <nav id="top-nav-main">
          <ul>
            <li>
              <a href="https://github.com/goodrain/rainbond" target="_blank"
                >Github</a
              >
            </li>

            <li>
              <a
                href="https://www.rainbond.com/docs/stable/user-manual/app-creation/language-support/html.html"
                target="_blank"
                >Docs</a
              >
            </li>

            <li>
              <a
                href="env.php"
                target="_blank"
                >MySQL示例</a
              >
            </li>
            <li>
              <a
                href="api.php"
                target="_blank"
                >API示例</a
              >
            </li>
          </ul>
        </nav>
        <nav id="top-nav-extra">
          <ul>
            <li>
              <a href="https://console.goodrain.com" target="_blank"
                >试用公有云</a
              >
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <main>
      <div id="main">
        <div class="row gutters">
          <div class="col col-10">
            <div class="form-item">
              <input type="“text”" placeholder="请输入API地址" id="api_url"/>
            </div>
          </div>
          <div class="col col-2">
            <button class="button small" onclick="handleClick()">Submit</button>
          </div>
        </div>
        <div
          class="row col-12"
          id="json"
          style="border: 1px solid #eee;min-height: 250px"
        ></div>
      </div>
    </main>
    <footer id="footer">
      <nav>
        <ul>
          <li><span>Rainbond</span></li>
        </ul>
      </nav>
      <p>&copy; Licence Apache.</p>
    </footer>
    <script
      src="./static/js/jquery-2.1.4.min.js"
      type="text/javascript"
    ></script>
    <script type="text/javascript" src="./static/js/tocbot.min.js"></script>
    <script src="./static/js/kube.js" type="text/javascript"></script>
    <script src="./static/js/master.js" type="text/javascript"></script>
    <script src="https://cdn.bootcss.com/jquery-jsonview/1.2.3/jquery.jsonview.js"></script>
    <script>
      $(function() {
        handleClick = () => {
          $.ajax({
            method: "get",
            // headers: {
            //   Authorization: `GRJWT ${getCookie("token")}`
            // },
            url: $('#api_url').val(),
            cache: false,
            success: data => {
              $("#json").JSONView(data);
            }
          });
          // .done((data)=>{
          //     $('#json').JSONView(data);
          // })
        };
      });
    </script>
  </body>
</html>
