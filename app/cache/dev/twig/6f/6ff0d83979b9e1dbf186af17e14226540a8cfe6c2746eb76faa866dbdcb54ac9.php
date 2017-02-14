<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_b04694ebc261a3ece15f57cb7c2b6b8d7db17ae7e317a8a9f5837be6fca50f62 extends Twig_Template
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
        $__internal_8e2a11473d4eb22a6bd138a2eb872551cde91e0d7e621f25aac02ae9fc6646d4 = $this->env->getExtension("native_profiler");
        $__internal_8e2a11473d4eb22a6bd138a2eb872551cde91e0d7e621f25aac02ae9fc6646d4->enter($__internal_8e2a11473d4eb22a6bd138a2eb872551cde91e0d7e621f25aac02ae9fc6646d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8e2a11473d4eb22a6bd138a2eb872551cde91e0d7e621f25aac02ae9fc6646d4->leave($__internal_8e2a11473d4eb22a6bd138a2eb872551cde91e0d7e621f25aac02ae9fc6646d4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
