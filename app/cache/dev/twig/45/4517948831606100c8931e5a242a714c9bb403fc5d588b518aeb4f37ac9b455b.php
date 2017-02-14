<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ebb3195fc9ceabbc29e0efd93ea9fbd9411c026deadc3965154837ee26704942 extends Twig_Template
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
        $__internal_2051e974f2be9323b4f56770989370d1d567262e576b518063a3c1753f415222 = $this->env->getExtension("native_profiler");
        $__internal_2051e974f2be9323b4f56770989370d1d567262e576b518063a3c1753f415222->enter($__internal_2051e974f2be9323b4f56770989370d1d567262e576b518063a3c1753f415222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_2051e974f2be9323b4f56770989370d1d567262e576b518063a3c1753f415222->leave($__internal_2051e974f2be9323b4f56770989370d1d567262e576b518063a3c1753f415222_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
