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
        $__internal_e19808dca1d1fe8b436385ad9dcac4db958d347050d11a52b236ff1dbb6372d4 = $this->env->getExtension("native_profiler");
        $__internal_e19808dca1d1fe8b436385ad9dcac4db958d347050d11a52b236ff1dbb6372d4->enter($__internal_e19808dca1d1fe8b436385ad9dcac4db958d347050d11a52b236ff1dbb6372d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e19808dca1d1fe8b436385ad9dcac4db958d347050d11a52b236ff1dbb6372d4->leave($__internal_e19808dca1d1fe8b436385ad9dcac4db958d347050d11a52b236ff1dbb6372d4_prof);

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
