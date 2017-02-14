<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e0325b7ca2e171e9a41a567e2db17d85f135e2fccadc4b3131436b9f3390a460 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57f6444a77b78dc90eb4ef5d8aa25e8d16dcf63007b471dcafbf56cfede84e02 = $this->env->getExtension("native_profiler");
        $__internal_57f6444a77b78dc90eb4ef5d8aa25e8d16dcf63007b471dcafbf56cfede84e02->enter($__internal_57f6444a77b78dc90eb4ef5d8aa25e8d16dcf63007b471dcafbf56cfede84e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57f6444a77b78dc90eb4ef5d8aa25e8d16dcf63007b471dcafbf56cfede84e02->leave($__internal_57f6444a77b78dc90eb4ef5d8aa25e8d16dcf63007b471dcafbf56cfede84e02_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4d2a09ac3d00001eee1955bcfb136e899c8a957a640f5c87a25bf1934262ab1c = $this->env->getExtension("native_profiler");
        $__internal_4d2a09ac3d00001eee1955bcfb136e899c8a957a640f5c87a25bf1934262ab1c->enter($__internal_4d2a09ac3d00001eee1955bcfb136e899c8a957a640f5c87a25bf1934262ab1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4d2a09ac3d00001eee1955bcfb136e899c8a957a640f5c87a25bf1934262ab1c->leave($__internal_4d2a09ac3d00001eee1955bcfb136e899c8a957a640f5c87a25bf1934262ab1c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_76aa87e96953d4739303150ac4b488abaf4cb65a36ff1d7a61c589ead0c298c5 = $this->env->getExtension("native_profiler");
        $__internal_76aa87e96953d4739303150ac4b488abaf4cb65a36ff1d7a61c589ead0c298c5->enter($__internal_76aa87e96953d4739303150ac4b488abaf4cb65a36ff1d7a61c589ead0c298c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_76aa87e96953d4739303150ac4b488abaf4cb65a36ff1d7a61c589ead0c298c5->leave($__internal_76aa87e96953d4739303150ac4b488abaf4cb65a36ff1d7a61c589ead0c298c5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_885e2782d47d8749dbae8aaa4064f7a60a7c6c32797f036d7d25837385f496a6 = $this->env->getExtension("native_profiler");
        $__internal_885e2782d47d8749dbae8aaa4064f7a60a7c6c32797f036d7d25837385f496a6->enter($__internal_885e2782d47d8749dbae8aaa4064f7a60a7c6c32797f036d7d25837385f496a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_885e2782d47d8749dbae8aaa4064f7a60a7c6c32797f036d7d25837385f496a6->leave($__internal_885e2782d47d8749dbae8aaa4064f7a60a7c6c32797f036d7d25837385f496a6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
