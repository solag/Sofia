<?php

/* ::base.html.twig */
class __TwigTemplate_5fedd4e9ac733a051270076cfe4cb971f5e9c92b4c9c4e121018a5379386bb56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'banner' => array($this, 'block_banner'),
            'navBar' => array($this, 'block_navBar'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'flashBag' => array($this, 'block_flashBag'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width\" initial-scale=\"1\"/>
        
        <title>
            ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "        </title>
        
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        
    </head>
    <body>
         
        <div id=\"global\" class=\"container-fluid\">

            <header class=\"row\">
            \t<div class=\"col-xs-12\">
                    ";
        // line 27
        $this->displayBlock('banner', $context, $blocks);
        // line 41
        echo "                    ";
        if ((($this->env->getExtension('security')->isGranted("ROLE_DBA") || $this->env->getExtension('security')->isGranted("ROLE_REQ")) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            echo " 
                        ";
            // line 42
            $this->displayBlock('navBar', $context, $blocks);
            // line 103
            echo "                    ";
        }
        // line 104
        echo "            \t</div>
                
            </header>

           

            <div id=\"topMain\" class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"row\">
                        <div  id=\"main\" class=\"col-xs-offset-1 col-xs-10\">
                            <div class=\"row\">
                                <div class=\"breadcrumbs\" class=\"col-xs-12\">
                                        ";
        // line 116
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 118
        echo "                                </div>
                                 <div class=\"flashBag\" class=\"col-xs-12\">
                                        ";
        // line 120
        $this->displayBlock('flashBag', $context, $blocks);
        // line 122
        echo "                                </div>
                            </div>
                            <div id=\"content\" class=\"row\">
                                ";
        // line 125
        $this->displayBlock('content', $context, $blocks);
        // line 127
        echo "                            </div>
                           
                        </div>
                        
                    </div>
                </div>
            </div>

            <footer class=\"row\">
                ";
        // line 136
        $this->displayBlock('footer', $context, $blocks);
        // line 150
        echo "            </footer>
        </div>
     
        
        
        ";
        // line 155
        $this->displayBlock('javascripts', $context, $blocks);
        // line 169
        echo "    </body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        // line 9
        echo "                Sofia - A2F Advisor
            ";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/css/bootstrap/dist/css/bootstrap.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/css/styles.css"), "html", null, true);
        echo "\">
        ";
    }

    // line 27
    public function block_banner($context, array $blocks = array())
    {
        // line 28
        echo "                        <div id=\"banner\" class=\"row\">

                            <div id=\"boxlogoA2F\" class=\"col-xs-2\">
                                <img id=\"logoA2F\" alt=\"Logo A2F\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/logoA2F.png"), "html", null, true);
        echo "\" />
                            </div>
                            <div id=\"boxNextWorkShop\" class=\"col-xs-8\">
                                ";
        // line 34
        $this->loadTemplate("A2FSofiaBundle:NextWorkShop:nextworkshopview.html.twig", "::base.html.twig", 34)->display($context);
        // line 35
        echo "                            </div>
                            <div id=\"boxLogoOracle\" class=\"col-xs-2\">
                                <img id=\"logoOracle\" alt=\"Logo Oracle\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/logoOracle.png"), "html", null, true);
        echo "\" />
                            </div>
                        </div>
                    ";
    }

    // line 42
    public function block_navBar($context, array $blocks = array())
    {
        // line 43
        echo "                            <div id=\"navBar\" class=\"row\"> 
                                <div class=\"col-xs-offset-1 col-xs-10 navContainer\">
                                    <div class=\"row\">
                                        <div id=\"boxPictoHome\" class=\"col-xs-1\">
                                            <a href=\"";
        // line 47
        if ($this->env->getExtension('security')->isGranted("ROLE_DBA")) {
            echo $this->env->getExtension('routing')->getPath("a2fSofia_a2flandingpage");
            echo " ";
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("a2fSofia_clientlandingpage", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "client", array()), "id", array()))), "html", null, true);
            echo " ";
        }
        echo "\">
                                                <img id=\"pictoHome\" class=\"picto\" alt=\"Accueil\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/Home.png"), "html", null, true);
        echo "\"/>
                                            </a>
                                        </div>
                                        ";
        // line 51
        if ($this->env->getExtension('security')->isGranted("ROLE_REQ")) {
            // line 52
            echo "                                            <nav class=\"col-xs-8 menuBar\">
                                                ";
            // line 53
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("A2FSofiaBundle:Client:nav", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "client", array()), "id", array()))), array());
            // line 54
            echo "                                            </nav>
                                        ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 56
            echo "                                            <nav class=\"col-xs-8 menuBar\">
                                                ";
            // line 57
            $this->loadTemplate("A2FSofiaBundle:Nav:adminmenu.html.twig", "::base.html.twig", 57)->display($context);
            // line 58
            echo "                                            </nav>                                       
                                        ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_DBA")) {
            // line 60
            echo "                                            <nav class=\"col-xs-8 menuBar\">
                                                ";
            // line 61
            $this->loadTemplate("A2FSofiaBundle:Nav:dbamenu.html.twig", "::base.html.twig", 61)->display($context);
            // line 62
            echo "                                            </nav>
                                        
                                        ";
        }
        // line 65
        echo "                                        <div class=\"col-xs-3\">
                                            <div id=\"boxPictoUser\" class=\"col-xs-2\">
                                                ";
        // line 67
        if ($this->env->getExtension('security')->isGranted("ROLE_REQ")) {
            // line 68
            echo "                                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("a2fSofia_user_detail", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "type" => "REQUESTER")), "html", null, true);
            echo "\">
                                                ";
        } else {
            // line 69
            echo "    
                                                <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("a2fSofia_user_detail", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "type" => "DBA")), "html", null, true);
            echo "\">
                                                ";
        }
        // line 72
        echo "                                                    <img id=\"pictoUser\" class=\"picto\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastName", array())), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/User.png"), "html", null, true);
        echo "\" width=\"40px\"/>
                                                </a>
                                            </div>
                                            <div  id=\"identifiant\" class=\"col-xs-offset-1 col-xs-7\">
                                                <div class=\"row\">
                                                      ";
        // line 77
        if ($this->env->getExtension('security')->isGranted("ROLE_REQ")) {
            // line 78
            echo "                                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("a2fSofia_user_detail", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "type" => "REQUESTER")), "html", null, true);
            echo "\">
                                                ";
        } else {
            // line 79
            echo "    
                                                <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("a2fSofia_user_detail", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "type" => "DBA")), "html", null, true);
            echo "\">
                                                ";
        }
        // line 82
        echo "                                                    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastName", array())), "html", null, true);
        echo "
                                                </a>    
                                                </div>
                                                ";
        // line 85
        if ($this->env->getExtension('security')->isGranted("ROLE_REQ")) {
            // line 86
            echo "                                                    <div id=\"menuCompanyName\" class=\"row\">
                                                     <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("a2fSofia_client_detail", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "client", array()), "id", array()), "type" => "REQUESTER")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "client", array()), "companyName", array())), "html", null, true);
            echo "</a>

                                                </div>
                                                ";
        }
        // line 91
        echo "                                            </div>
                                            <div id=\"boxPictoLogout\" class=\"col-xs-2\">
                                                <a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">
                                                    <img id=\"pictoLogout\" class=\"picto\" alt=\"Se déconnecter\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/images/Logout.png"), "html", null, true);
        echo "\" width=\"40px\"/>
                                                 </a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        ";
    }

    // line 116
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 117
        echo "                                        ";
    }

    // line 120
    public function block_flashBag($context, array $blocks = array())
    {
        // line 121
        echo "                                        ";
    }

    // line 125
    public function block_content($context, array $blocks = array())
    {
        echo "                                    
                                ";
    }

    // line 136
    public function block_footer($context, array $blocks = array())
    {
        // line 137
        echo "                    <div class=\"col-xs-12\">
                        <ul>
                            <li class=\"col-xs-offset-3 col-xs-2\">
                                <a href=\"#\">Mentions légales</a>
                            </li>
                            <li class=\"col-xs-2\">
                                <a href=\"http://a2fadvisor.com/\">A2F Advisor</a>
                            </li>
                            <li class=\"col-xs-2\">
                                <a href=\"#\">Contact administrateur</a>
                            </li>
                    </div>
                ";
    }

    // line 155
    public function block_javascripts($context, array $blocks = array())
    {
        // line 156
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/css/bootstrap/dist/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/css/bootstrap/dist/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/a2fsofia/css/bootstrap/dist/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\">
                \$(document).ready(function() {
                \$( \".selector\" ).accordion();

                \$( \".accordion\" ).accordion();

            });
            </script>
            
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 158,  375 => 157,  370 => 156,  367 => 155,  351 => 137,  348 => 136,  341 => 125,  337 => 121,  334 => 120,  330 => 117,  327 => 116,  314 => 94,  310 => 93,  306 => 91,  297 => 87,  294 => 86,  292 => 85,  283 => 82,  278 => 80,  275 => 79,  269 => 78,  267 => 77,  254 => 72,  249 => 70,  246 => 69,  240 => 68,  238 => 67,  234 => 65,  229 => 62,  227 => 61,  224 => 60,  220 => 58,  218 => 57,  215 => 56,  211 => 54,  209 => 53,  206 => 52,  204 => 51,  198 => 48,  188 => 47,  182 => 43,  179 => 42,  171 => 37,  167 => 35,  165 => 34,  159 => 31,  154 => 28,  151 => 27,  145 => 15,  140 => 14,  137 => 13,  132 => 9,  129 => 8,  123 => 169,  121 => 155,  114 => 150,  112 => 136,  101 => 127,  99 => 125,  94 => 122,  92 => 120,  88 => 118,  86 => 116,  72 => 104,  69 => 103,  67 => 42,  62 => 41,  60 => 27,  48 => 18,  45 => 17,  43 => 13,  39 => 11,  37 => 8,  28 => 1,);
    }
}
