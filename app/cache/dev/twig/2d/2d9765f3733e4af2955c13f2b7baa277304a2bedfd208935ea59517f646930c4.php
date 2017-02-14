<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_8acda00d425a93e27cb1a2afcf2ea850b23c4e1eab554571c650b9f9a086e5ac extends Twig_Template
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
        $__internal_87da60e67564fc19f5aef21edb5456415ce55b267a798bfedd5accb4196df4bb = $this->env->getExtension("native_profiler");
        $__internal_87da60e67564fc19f5aef21edb5456415ce55b267a798bfedd5accb4196df4bb->enter($__internal_87da60e67564fc19f5aef21edb5456415ce55b267a798bfedd5accb4196df4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_87da60e67564fc19f5aef21edb5456415ce55b267a798bfedd5accb4196df4bb->leave($__internal_87da60e67564fc19f5aef21edb5456415ce55b267a798bfedd5accb4196df4bb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
