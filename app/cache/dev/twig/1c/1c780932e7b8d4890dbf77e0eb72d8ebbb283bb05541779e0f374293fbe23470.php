<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_b63dfe4552385fd6682bfa6f155e177835e466ec7523af5784191cbf616cb428 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_141f368dff65d970a90206f68b92fb357a4fe4f4a97027d1c86dcfe4e8d54f01 = $this->env->getExtension("native_profiler");
        $__internal_141f368dff65d970a90206f68b92fb357a4fe4f4a97027d1c86dcfe4e8d54f01->enter($__internal_141f368dff65d970a90206f68b92fb357a4fe4f4a97027d1c86dcfe4e8d54f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_141f368dff65d970a90206f68b92fb357a4fe4f4a97027d1c86dcfe4e8d54f01->leave($__internal_141f368dff65d970a90206f68b92fb357a4fe4f4a97027d1c86dcfe4e8d54f01_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a2bd2af9177dbe421cfa55473bbe71c6b29cf896448c47f8783c8ea7e08d2631 = $this->env->getExtension("native_profiler");
        $__internal_a2bd2af9177dbe421cfa55473bbe71c6b29cf896448c47f8783c8ea7e08d2631->enter($__internal_a2bd2af9177dbe421cfa55473bbe71c6b29cf896448c47f8783c8ea7e08d2631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_a2bd2af9177dbe421cfa55473bbe71c6b29cf896448c47f8783c8ea7e08d2631->leave($__internal_a2bd2af9177dbe421cfa55473bbe71c6b29cf896448c47f8783c8ea7e08d2631_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "@FOSUser/Profile/edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
