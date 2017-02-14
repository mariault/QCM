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
        $__internal_320dfa79ce25da9d159d13edec96e93f7262863a73d6a404b58664c2d3c8c9e1 = $this->env->getExtension("native_profiler");
        $__internal_320dfa79ce25da9d159d13edec96e93f7262863a73d6a404b58664c2d3c8c9e1->enter($__internal_320dfa79ce25da9d159d13edec96e93f7262863a73d6a404b58664c2d3c8c9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_320dfa79ce25da9d159d13edec96e93f7262863a73d6a404b58664c2d3c8c9e1->leave($__internal_320dfa79ce25da9d159d13edec96e93f7262863a73d6a404b58664c2d3c8c9e1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f69b0def7f0ec5a3ddd2f67ff5d7413e6db6bebaefeeab1fec84388110cff14b = $this->env->getExtension("native_profiler");
        $__internal_f69b0def7f0ec5a3ddd2f67ff5d7413e6db6bebaefeeab1fec84388110cff14b->enter($__internal_f69b0def7f0ec5a3ddd2f67ff5d7413e6db6bebaefeeab1fec84388110cff14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f69b0def7f0ec5a3ddd2f67ff5d7413e6db6bebaefeeab1fec84388110cff14b->leave($__internal_f69b0def7f0ec5a3ddd2f67ff5d7413e6db6bebaefeeab1fec84388110cff14b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3dbd7469abde2a6c997088e784c3c15882123b51d3249f00251abfd092722824 = $this->env->getExtension("native_profiler");
        $__internal_3dbd7469abde2a6c997088e784c3c15882123b51d3249f00251abfd092722824->enter($__internal_3dbd7469abde2a6c997088e784c3c15882123b51d3249f00251abfd092722824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3dbd7469abde2a6c997088e784c3c15882123b51d3249f00251abfd092722824->leave($__internal_3dbd7469abde2a6c997088e784c3c15882123b51d3249f00251abfd092722824_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f87761d164cb284718698beec94ba3c31a6e33724994399a532ee8dcb54d02f = $this->env->getExtension("native_profiler");
        $__internal_8f87761d164cb284718698beec94ba3c31a6e33724994399a532ee8dcb54d02f->enter($__internal_8f87761d164cb284718698beec94ba3c31a6e33724994399a532ee8dcb54d02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8f87761d164cb284718698beec94ba3c31a6e33724994399a532ee8dcb54d02f->leave($__internal_8f87761d164cb284718698beec94ba3c31a6e33724994399a532ee8dcb54d02f_prof);

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
