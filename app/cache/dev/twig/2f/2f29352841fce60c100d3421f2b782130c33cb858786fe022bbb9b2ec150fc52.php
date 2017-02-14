<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_c712e789b2add52b18aebe3113391c5b48bfac6fc59fb5acc19e489ca5f41339 extends Twig_Template
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
        $__internal_dedc746c300bf706fbf610dc8bad436adee4e0566fd0ce01a5cf3bebc8f59c4b = $this->env->getExtension("native_profiler");
        $__internal_dedc746c300bf706fbf610dc8bad436adee4e0566fd0ce01a5cf3bebc8f59c4b->enter($__internal_dedc746c300bf706fbf610dc8bad436adee4e0566fd0ce01a5cf3bebc8f59c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_dedc746c300bf706fbf610dc8bad436adee4e0566fd0ce01a5cf3bebc8f59c4b->leave($__internal_dedc746c300bf706fbf610dc8bad436adee4e0566fd0ce01a5cf3bebc8f59c4b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
