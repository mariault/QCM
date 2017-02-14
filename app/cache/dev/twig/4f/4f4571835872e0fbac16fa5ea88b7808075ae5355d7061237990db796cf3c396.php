<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_ccac6b9b1e39fd2122d3148f18705430bfdc708a04c4adc1c9cb36a196e76584 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_471e6bfd57a315df41d5264a9ae85d319b9d0c9d036dbd56ccd62b729d9f5eee = $this->env->getExtension("native_profiler");
        $__internal_471e6bfd57a315df41d5264a9ae85d319b9d0c9d036dbd56ccd62b729d9f5eee->enter($__internal_471e6bfd57a315df41d5264a9ae85d319b9d0c9d036dbd56ccd62b729d9f5eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_471e6bfd57a315df41d5264a9ae85d319b9d0c9d036dbd56ccd62b729d9f5eee->leave($__internal_471e6bfd57a315df41d5264a9ae85d319b9d0c9d036dbd56ccd62b729d9f5eee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_350c28511fb911c78c9355d7553f38aeaf62c9b82fedc54ecd3f708be262362b = $this->env->getExtension("native_profiler");
        $__internal_350c28511fb911c78c9355d7553f38aeaf62c9b82fedc54ecd3f708be262362b->enter($__internal_350c28511fb911c78c9355d7553f38aeaf62c9b82fedc54ecd3f708be262362b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_350c28511fb911c78c9355d7553f38aeaf62c9b82fedc54ecd3f708be262362b->leave($__internal_350c28511fb911c78c9355d7553f38aeaf62c9b82fedc54ecd3f708be262362b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "@FOSUser/Registration/register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
