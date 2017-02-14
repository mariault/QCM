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
        $__internal_f5cdb0f669c284f13aca64cf14eed7783662b4cd0c8c0f4dc039384779a1b984 = $this->env->getExtension("native_profiler");
        $__internal_f5cdb0f669c284f13aca64cf14eed7783662b4cd0c8c0f4dc039384779a1b984->enter($__internal_f5cdb0f669c284f13aca64cf14eed7783662b4cd0c8c0f4dc039384779a1b984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5cdb0f669c284f13aca64cf14eed7783662b4cd0c8c0f4dc039384779a1b984->leave($__internal_f5cdb0f669c284f13aca64cf14eed7783662b4cd0c8c0f4dc039384779a1b984_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4c4e8c17f667cca3c6d709f31545bb514ddf233007c85f15fbff195a1fb5329e = $this->env->getExtension("native_profiler");
        $__internal_4c4e8c17f667cca3c6d709f31545bb514ddf233007c85f15fbff195a1fb5329e->enter($__internal_4c4e8c17f667cca3c6d709f31545bb514ddf233007c85f15fbff195a1fb5329e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_4c4e8c17f667cca3c6d709f31545bb514ddf233007c85f15fbff195a1fb5329e->leave($__internal_4c4e8c17f667cca3c6d709f31545bb514ddf233007c85f15fbff195a1fb5329e_prof);

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
