<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_f44cd3106683043b9c8b5b8d5a8e21510136220667b5a7e926ec4b069ad7e4c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_9d2cb4cc755c5f09738dcf94df4c8b2046f52501965f502fbec754f73da104f9 = $this->env->getExtension("native_profiler");
        $__internal_9d2cb4cc755c5f09738dcf94df4c8b2046f52501965f502fbec754f73da104f9->enter($__internal_9d2cb4cc755c5f09738dcf94df4c8b2046f52501965f502fbec754f73da104f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d2cb4cc755c5f09738dcf94df4c8b2046f52501965f502fbec754f73da104f9->leave($__internal_9d2cb4cc755c5f09738dcf94df4c8b2046f52501965f502fbec754f73da104f9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c00b842ca97e14310adc918635a3a47d6073d955ef9580a37c38a9b55ec6fefc = $this->env->getExtension("native_profiler");
        $__internal_c00b842ca97e14310adc918635a3a47d6073d955ef9580a37c38a9b55ec6fefc->enter($__internal_c00b842ca97e14310adc918635a3a47d6073d955ef9580a37c38a9b55ec6fefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_c00b842ca97e14310adc918635a3a47d6073d955ef9580a37c38a9b55ec6fefc->leave($__internal_c00b842ca97e14310adc918635a3a47d6073d955ef9580a37c38a9b55ec6fefc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "@FOSUser/Profile/show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
