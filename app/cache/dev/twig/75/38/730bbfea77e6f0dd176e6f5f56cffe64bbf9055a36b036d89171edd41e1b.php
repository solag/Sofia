<?php

/* A2FSofiaBundle::layout.html.twig */
class __TwigTemplate_7538730bbfea77e6f0dd176e6f5f56cffe64bbf9055a36b036d89171edd41e1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "A2FSofiaBundle::layout.html.twig", 1);
        $this->blocks = array(
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'flashBag' => array($this, 'block_flashBag'),
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
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 4
        echo "    <a href=\"";
        if ($this->env->getExtension('security')->isGranted("ROLE_DBA")) {
            echo $this->env->getExtension('routing')->getPath("a2fSofia_a2flandingpage");
            echo " ";
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("a2fSofia_clientlandingpage", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "client", array()), "id", array()))), "html", null, true);
            echo " ";
        }
        echo "\">Accueil</a>
";
    }

    // line 6
    public function block_flashBag($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "    
";
    }

    public function getTemplateName()
    {
        return "A2FSofiaBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 12,  65 => 11,  54 => 8,  49 => 7,  46 => 6,  33 => 4,  30 => 3,  11 => 1,);
    }
}
