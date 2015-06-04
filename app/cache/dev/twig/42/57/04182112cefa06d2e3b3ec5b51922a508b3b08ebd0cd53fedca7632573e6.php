<?php

/* A2FSofiaBundle:Global:loginpage.html.twig */
class __TwigTemplate_425704182112cefa06d2e3b3ec5b51922a508b3b08ebd0cd53fedca7632573e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "A2FSofiaBundle:Global:loginpage.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 6
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 8
        echo "    
    <section class=\"col-xs-12\" id=\"loginSection\">
        <form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" id=\"loginForm\">
            <div class=\"row\">
                <div class=\"col-xs-12 formLine\">
                    <label class=\"col-xs-offset-4 col-xs-2 loginFormLabel\" for=\"username\">Login</label>
                    <input class=\"col-xs-2\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-12 formLine\">
                    <label class=\"col-xs-offset-4 col-xs-2 loginFormLabel\" for=\"password\">Mot de passe</label>
                    <input class=\"col-xs-2\" type=\"password\" id=\"password\" name=\"_password\"/>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-12 formLine \">
                    <input class=\"btn col-xs-offset-6 col-xs-1\" type=\"submit\" value=\"Connexion\" id=\"boutonConnexion\"/>
                </div>
            </div>
        </form>
    </section>
";
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle:Global:loginpage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  46 => 10,  42 => 8,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
