<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_16172a53491be39ca7e4bce15027578b48dd76bc600adb7e72f8010665a1c80c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18931f3ddc3e4d36d86088f60d6785b137a20eaebbfb1c50c6cbec17f9f6fb8d = $this->env->getExtension("native_profiler");
        $__internal_18931f3ddc3e4d36d86088f60d6785b137a20eaebbfb1c50c6cbec17f9f6fb8d->enter($__internal_18931f3ddc3e4d36d86088f60d6785b137a20eaebbfb1c50c6cbec17f9f6fb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18931f3ddc3e4d36d86088f60d6785b137a20eaebbfb1c50c6cbec17f9f6fb8d->leave($__internal_18931f3ddc3e4d36d86088f60d6785b137a20eaebbfb1c50c6cbec17f9f6fb8d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_197b5742fd003ebb3a0c4572e11820255609cb308ce3d3a0033f43596c72ec21 = $this->env->getExtension("native_profiler");
        $__internal_197b5742fd003ebb3a0c4572e11820255609cb308ce3d3a0033f43596c72ec21->enter($__internal_197b5742fd003ebb3a0c4572e11820255609cb308ce3d3a0033f43596c72ec21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_197b5742fd003ebb3a0c4572e11820255609cb308ce3d3a0033f43596c72ec21->leave($__internal_197b5742fd003ebb3a0c4572e11820255609cb308ce3d3a0033f43596c72ec21_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "@FOSUser/Group/list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
