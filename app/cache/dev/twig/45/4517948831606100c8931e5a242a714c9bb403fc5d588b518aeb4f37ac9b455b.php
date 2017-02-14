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
        $__internal_85f0602fe66169b9fe243b68460a4de461c6db170eaf5ccdb7a6ebb1a201e188 = $this->env->getExtension("native_profiler");
        $__internal_85f0602fe66169b9fe243b68460a4de461c6db170eaf5ccdb7a6ebb1a201e188->enter($__internal_85f0602fe66169b9fe243b68460a4de461c6db170eaf5ccdb7a6ebb1a201e188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_85f0602fe66169b9fe243b68460a4de461c6db170eaf5ccdb7a6ebb1a201e188->leave($__internal_85f0602fe66169b9fe243b68460a4de461c6db170eaf5ccdb7a6ebb1a201e188_prof);

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
