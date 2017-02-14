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
        $__internal_642bc43fa09e9d47f2efddf20eec5839ae25314bfa2e6c59bcff3eb05abebd49 = $this->env->getExtension("native_profiler");
        $__internal_642bc43fa09e9d47f2efddf20eec5839ae25314bfa2e6c59bcff3eb05abebd49->enter($__internal_642bc43fa09e9d47f2efddf20eec5839ae25314bfa2e6c59bcff3eb05abebd49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_642bc43fa09e9d47f2efddf20eec5839ae25314bfa2e6c59bcff3eb05abebd49->leave($__internal_642bc43fa09e9d47f2efddf20eec5839ae25314bfa2e6c59bcff3eb05abebd49_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3db49879fe714f21619157f97e906e38a26e2a8586a120045dd0e4370615218a = $this->env->getExtension("native_profiler");
        $__internal_3db49879fe714f21619157f97e906e38a26e2a8586a120045dd0e4370615218a->enter($__internal_3db49879fe714f21619157f97e906e38a26e2a8586a120045dd0e4370615218a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_3db49879fe714f21619157f97e906e38a26e2a8586a120045dd0e4370615218a->leave($__internal_3db49879fe714f21619157f97e906e38a26e2a8586a120045dd0e4370615218a_prof);

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
