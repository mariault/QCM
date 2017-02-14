<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_bde93556d383c6f6e4b8fb2c9dd3f4e9f992a6ec04f365e8b3cd029c9bac1c9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_d1b2b530c732f4e2bf2adccf0fd3a9ef1e07396cfd9ce7a9a046b17bf48554f9 = $this->env->getExtension("native_profiler");
        $__internal_d1b2b530c732f4e2bf2adccf0fd3a9ef1e07396cfd9ce7a9a046b17bf48554f9->enter($__internal_d1b2b530c732f4e2bf2adccf0fd3a9ef1e07396cfd9ce7a9a046b17bf48554f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1b2b530c732f4e2bf2adccf0fd3a9ef1e07396cfd9ce7a9a046b17bf48554f9->leave($__internal_d1b2b530c732f4e2bf2adccf0fd3a9ef1e07396cfd9ce7a9a046b17bf48554f9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_975aec4d80458b73ecdc252e0f1792b0f325b7305a85f88b521e78de091a61bd = $this->env->getExtension("native_profiler");
        $__internal_975aec4d80458b73ecdc252e0f1792b0f325b7305a85f88b521e78de091a61bd->enter($__internal_975aec4d80458b73ecdc252e0f1792b0f325b7305a85f88b521e78de091a61bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_975aec4d80458b73ecdc252e0f1792b0f325b7305a85f88b521e78de091a61bd->leave($__internal_975aec4d80458b73ecdc252e0f1792b0f325b7305a85f88b521e78de091a61bd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
