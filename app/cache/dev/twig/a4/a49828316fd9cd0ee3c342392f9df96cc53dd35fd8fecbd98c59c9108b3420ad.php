<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_0670437d12daa2315b24ad03718762270b5b618e6ec3bc6dd0746d8aacb4069f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_994ea8be8846a9346f68cceaa19ff915c2d07c341998d8481a9e1428f53ecfa6 = $this->env->getExtension("native_profiler");
        $__internal_994ea8be8846a9346f68cceaa19ff915c2d07c341998d8481a9e1428f53ecfa6->enter($__internal_994ea8be8846a9346f68cceaa19ff915c2d07c341998d8481a9e1428f53ecfa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_994ea8be8846a9346f68cceaa19ff915c2d07c341998d8481a9e1428f53ecfa6->leave($__internal_994ea8be8846a9346f68cceaa19ff915c2d07c341998d8481a9e1428f53ecfa6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
