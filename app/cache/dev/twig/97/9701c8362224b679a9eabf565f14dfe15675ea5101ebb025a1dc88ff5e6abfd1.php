<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_d07393620b5aed80b1958854c10da3a3f23c143a96905d4d6d5b687331062840 extends Twig_Template
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
        $__internal_593c1420ec82d8323e56013f42c34b5c486a2de965b2dc71630b01a97819ed2c = $this->env->getExtension("native_profiler");
        $__internal_593c1420ec82d8323e56013f42c34b5c486a2de965b2dc71630b01a97819ed2c->enter($__internal_593c1420ec82d8323e56013f42c34b5c486a2de965b2dc71630b01a97819ed2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_593c1420ec82d8323e56013f42c34b5c486a2de965b2dc71630b01a97819ed2c->leave($__internal_593c1420ec82d8323e56013f42c34b5c486a2de965b2dc71630b01a97819ed2c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
