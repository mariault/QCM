<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_824fe2ef61ff65ad8bbd49c32d0b58a9bfe75c89817e2574b8790b13c3448484 extends Twig_Template
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
        $__internal_5a2216632fccea9aa2086ca0e0bbfbd5e6e5e89b97c6f7173f08085f14db3f00 = $this->env->getExtension("native_profiler");
        $__internal_5a2216632fccea9aa2086ca0e0bbfbd5e6e5e89b97c6f7173f08085f14db3f00->enter($__internal_5a2216632fccea9aa2086ca0e0bbfbd5e6e5e89b97c6f7173f08085f14db3f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5a2216632fccea9aa2086ca0e0bbfbd5e6e5e89b97c6f7173f08085f14db3f00->leave($__internal_5a2216632fccea9aa2086ca0e0bbfbd5e6e5e89b97c6f7173f08085f14db3f00_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
