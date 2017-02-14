<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_19361ebe34aca1fd4bc6b9231d2d80806de0c6f078f971250da2397992e49c23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93af0b50da176af6a782738ab1d1ac95d1919179ad75b9fc78943298b5132542 = $this->env->getExtension("native_profiler");
        $__internal_93af0b50da176af6a782738ab1d1ac95d1919179ad75b9fc78943298b5132542->enter($__internal_93af0b50da176af6a782738ab1d1ac95d1919179ad75b9fc78943298b5132542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93af0b50da176af6a782738ab1d1ac95d1919179ad75b9fc78943298b5132542->leave($__internal_93af0b50da176af6a782738ab1d1ac95d1919179ad75b9fc78943298b5132542_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_21fba8969b251ffffe262011d8da455215105c7983b749ca7d823b14af3d7de1 = $this->env->getExtension("native_profiler");
        $__internal_21fba8969b251ffffe262011d8da455215105c7983b749ca7d823b14af3d7de1->enter($__internal_21fba8969b251ffffe262011d8da455215105c7983b749ca7d823b14af3d7de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_21fba8969b251ffffe262011d8da455215105c7983b749ca7d823b14af3d7de1->leave($__internal_21fba8969b251ffffe262011d8da455215105c7983b749ca7d823b14af3d7de1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9d3766d6bae86bd5ded79a89e1595a73dfc451c7cc68bdec43cf428015fbda9 = $this->env->getExtension("native_profiler");
        $__internal_d9d3766d6bae86bd5ded79a89e1595a73dfc451c7cc68bdec43cf428015fbda9->enter($__internal_d9d3766d6bae86bd5ded79a89e1595a73dfc451c7cc68bdec43cf428015fbda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d9d3766d6bae86bd5ded79a89e1595a73dfc451c7cc68bdec43cf428015fbda9->leave($__internal_d9d3766d6bae86bd5ded79a89e1595a73dfc451c7cc68bdec43cf428015fbda9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f873f63d6157f49d500a8ed71c46a81ae60b5e946141b7d8be4299a598b02467 = $this->env->getExtension("native_profiler");
        $__internal_f873f63d6157f49d500a8ed71c46a81ae60b5e946141b7d8be4299a598b02467->enter($__internal_f873f63d6157f49d500a8ed71c46a81ae60b5e946141b7d8be4299a598b02467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f873f63d6157f49d500a8ed71c46a81ae60b5e946141b7d8be4299a598b02467->leave($__internal_f873f63d6157f49d500a8ed71c46a81ae60b5e946141b7d8be4299a598b02467_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
