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
        $__internal_d2d561f2272fcc37d7e4de7dc66f230b02a8cf70893c95e5bd0ef7a710e7e451 = $this->env->getExtension("native_profiler");
        $__internal_d2d561f2272fcc37d7e4de7dc66f230b02a8cf70893c95e5bd0ef7a710e7e451->enter($__internal_d2d561f2272fcc37d7e4de7dc66f230b02a8cf70893c95e5bd0ef7a710e7e451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2d561f2272fcc37d7e4de7dc66f230b02a8cf70893c95e5bd0ef7a710e7e451->leave($__internal_d2d561f2272fcc37d7e4de7dc66f230b02a8cf70893c95e5bd0ef7a710e7e451_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f157c4c51366e19321a8b3293f0ea36f04573cc6396f1b06f3ac2be731649332 = $this->env->getExtension("native_profiler");
        $__internal_f157c4c51366e19321a8b3293f0ea36f04573cc6396f1b06f3ac2be731649332->enter($__internal_f157c4c51366e19321a8b3293f0ea36f04573cc6396f1b06f3ac2be731649332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f157c4c51366e19321a8b3293f0ea36f04573cc6396f1b06f3ac2be731649332->leave($__internal_f157c4c51366e19321a8b3293f0ea36f04573cc6396f1b06f3ac2be731649332_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5d57a05fa7c1ce08c59137da62dbf5008a506bcd8e2ecfeed13076198422cf66 = $this->env->getExtension("native_profiler");
        $__internal_5d57a05fa7c1ce08c59137da62dbf5008a506bcd8e2ecfeed13076198422cf66->enter($__internal_5d57a05fa7c1ce08c59137da62dbf5008a506bcd8e2ecfeed13076198422cf66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5d57a05fa7c1ce08c59137da62dbf5008a506bcd8e2ecfeed13076198422cf66->leave($__internal_5d57a05fa7c1ce08c59137da62dbf5008a506bcd8e2ecfeed13076198422cf66_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_59ecae1774556c3ad5c738fdabddb610ab6e2ba075c171f1198ac9266579fb30 = $this->env->getExtension("native_profiler");
        $__internal_59ecae1774556c3ad5c738fdabddb610ab6e2ba075c171f1198ac9266579fb30->enter($__internal_59ecae1774556c3ad5c738fdabddb610ab6e2ba075c171f1198ac9266579fb30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_59ecae1774556c3ad5c738fdabddb610ab6e2ba075c171f1198ac9266579fb30->leave($__internal_59ecae1774556c3ad5c738fdabddb610ab6e2ba075c171f1198ac9266579fb30_prof);

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
