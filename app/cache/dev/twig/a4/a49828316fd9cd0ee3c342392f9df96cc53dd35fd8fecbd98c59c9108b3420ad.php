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
        $__internal_df06746730f235fdcae7a7e2cf5cd02d5a3640636c685cc0de5a7f42bce69f3c = $this->env->getExtension("native_profiler");
        $__internal_df06746730f235fdcae7a7e2cf5cd02d5a3640636c685cc0de5a7f42bce69f3c->enter($__internal_df06746730f235fdcae7a7e2cf5cd02d5a3640636c685cc0de5a7f42bce69f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_df06746730f235fdcae7a7e2cf5cd02d5a3640636c685cc0de5a7f42bce69f3c->leave($__internal_df06746730f235fdcae7a7e2cf5cd02d5a3640636c685cc0de5a7f42bce69f3c_prof);

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
