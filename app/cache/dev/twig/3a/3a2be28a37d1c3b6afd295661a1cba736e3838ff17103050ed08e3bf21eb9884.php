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
        $__internal_75f3bd27465336409cac31cae6f8e4f0bb8ab0e412db2a0d959903c3f0a6bb7f = $this->env->getExtension("native_profiler");
        $__internal_75f3bd27465336409cac31cae6f8e4f0bb8ab0e412db2a0d959903c3f0a6bb7f->enter($__internal_75f3bd27465336409cac31cae6f8e4f0bb8ab0e412db2a0d959903c3f0a6bb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75f3bd27465336409cac31cae6f8e4f0bb8ab0e412db2a0d959903c3f0a6bb7f->leave($__internal_75f3bd27465336409cac31cae6f8e4f0bb8ab0e412db2a0d959903c3f0a6bb7f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_91e56447359338a6bff7735baa40ada8ad2a2a384ad7b06925ac18e96bfa7f4b = $this->env->getExtension("native_profiler");
        $__internal_91e56447359338a6bff7735baa40ada8ad2a2a384ad7b06925ac18e96bfa7f4b->enter($__internal_91e56447359338a6bff7735baa40ada8ad2a2a384ad7b06925ac18e96bfa7f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_91e56447359338a6bff7735baa40ada8ad2a2a384ad7b06925ac18e96bfa7f4b->leave($__internal_91e56447359338a6bff7735baa40ada8ad2a2a384ad7b06925ac18e96bfa7f4b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a4e38f4c71cc2071edd23a72405e9a5daf6e7c6ce44554fa57ecbbc9a470ae74 = $this->env->getExtension("native_profiler");
        $__internal_a4e38f4c71cc2071edd23a72405e9a5daf6e7c6ce44554fa57ecbbc9a470ae74->enter($__internal_a4e38f4c71cc2071edd23a72405e9a5daf6e7c6ce44554fa57ecbbc9a470ae74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a4e38f4c71cc2071edd23a72405e9a5daf6e7c6ce44554fa57ecbbc9a470ae74->leave($__internal_a4e38f4c71cc2071edd23a72405e9a5daf6e7c6ce44554fa57ecbbc9a470ae74_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f1aee8b2fe3daf0e37b81bfb3a9162cd84b8993c96212ab238f234b15b0fa69e = $this->env->getExtension("native_profiler");
        $__internal_f1aee8b2fe3daf0e37b81bfb3a9162cd84b8993c96212ab238f234b15b0fa69e->enter($__internal_f1aee8b2fe3daf0e37b81bfb3a9162cd84b8993c96212ab238f234b15b0fa69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f1aee8b2fe3daf0e37b81bfb3a9162cd84b8993c96212ab238f234b15b0fa69e->leave($__internal_f1aee8b2fe3daf0e37b81bfb3a9162cd84b8993c96212ab238f234b15b0fa69e_prof);

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
