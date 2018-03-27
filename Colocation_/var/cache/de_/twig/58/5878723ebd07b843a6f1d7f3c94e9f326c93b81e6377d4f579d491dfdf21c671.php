<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a8dbcc5bda56b7c453757554bf8e481a1fd7523b45e0030ac092fd46800c51f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_609c15ed21cfdc7d715c3639d8f45cb7d37a4edcc15ba569f1d15bda2df7a732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_609c15ed21cfdc7d715c3639d8f45cb7d37a4edcc15ba569f1d15bda2df7a732->enter($__internal_609c15ed21cfdc7d715c3639d8f45cb7d37a4edcc15ba569f1d15bda2df7a732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_9416441626a1430366cb1557f6368f038d1c3068fedcc4741993a37287bee7e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9416441626a1430366cb1557f6368f038d1c3068fedcc4741993a37287bee7e1->enter($__internal_9416441626a1430366cb1557f6368f038d1c3068fedcc4741993a37287bee7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_609c15ed21cfdc7d715c3639d8f45cb7d37a4edcc15ba569f1d15bda2df7a732->leave($__internal_609c15ed21cfdc7d715c3639d8f45cb7d37a4edcc15ba569f1d15bda2df7a732_prof);

        
        $__internal_9416441626a1430366cb1557f6368f038d1c3068fedcc4741993a37287bee7e1->leave($__internal_9416441626a1430366cb1557f6368f038d1c3068fedcc4741993a37287bee7e1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
