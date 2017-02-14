<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_d5294485fa978efc16bc6c4299ee6e5a08682047c146b975634af067a4349cc9 extends Twig_Template
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
        $__internal_218309eace2051800a39277143ec68f9a7db80a4874b60f2206284da9eb838a9 = $this->env->getExtension("native_profiler");
        $__internal_218309eace2051800a39277143ec68f9a7db80a4874b60f2206284da9eb838a9->enter($__internal_218309eace2051800a39277143ec68f9a7db80a4874b60f2206284da9eb838a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_218309eace2051800a39277143ec68f9a7db80a4874b60f2206284da9eb838a9->leave($__internal_218309eace2051800a39277143ec68f9a7db80a4874b60f2206284da9eb838a9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
