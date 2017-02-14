<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_c87f9287851e5034cc25ab4d156906889abc0a8d2fda2839a5bb146d643e8044 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_7286c39786498d7052c2b1a25fd15963b50603428ef8f0db208d2c6af1644404 = $this->env->getExtension("native_profiler");
        $__internal_7286c39786498d7052c2b1a25fd15963b50603428ef8f0db208d2c6af1644404->enter($__internal_7286c39786498d7052c2b1a25fd15963b50603428ef8f0db208d2c6af1644404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7286c39786498d7052c2b1a25fd15963b50603428ef8f0db208d2c6af1644404->leave($__internal_7286c39786498d7052c2b1a25fd15963b50603428ef8f0db208d2c6af1644404_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_23901d6cef4fe4d433a38825a59e7739b2d058948d61a65cbfedbe0653da8d1f = $this->env->getExtension("native_profiler");
        $__internal_23901d6cef4fe4d433a38825a59e7739b2d058948d61a65cbfedbe0653da8d1f->enter($__internal_23901d6cef4fe4d433a38825a59e7739b2d058948d61a65cbfedbe0653da8d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_23901d6cef4fe4d433a38825a59e7739b2d058948d61a65cbfedbe0653da8d1f->leave($__internal_23901d6cef4fe4d433a38825a59e7739b2d058948d61a65cbfedbe0653da8d1f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_974506a4895083036092056187a715dece8f529b38578cf2cfd482793c7bf93d = $this->env->getExtension("native_profiler");
        $__internal_974506a4895083036092056187a715dece8f529b38578cf2cfd482793c7bf93d->enter($__internal_974506a4895083036092056187a715dece8f529b38578cf2cfd482793c7bf93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_974506a4895083036092056187a715dece8f529b38578cf2cfd482793c7bf93d->leave($__internal_974506a4895083036092056187a715dece8f529b38578cf2cfd482793c7bf93d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
