<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_77931d0b87f3290bf2ce9e448d723dc00ab7fe900db14d27638c61aaefc9a165 extends Twig_Template
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
        $__internal_2d66743888bb7dcd44aceb9c571a8b83ddcd9a45b927400507888fa7bec33aa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d66743888bb7dcd44aceb9c571a8b83ddcd9a45b927400507888fa7bec33aa5->enter($__internal_2d66743888bb7dcd44aceb9c571a8b83ddcd9a45b927400507888fa7bec33aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_9926e464f429631a25c07aa883c18c2c61f7ad1b61219e46eb9d995fc9afb4da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9926e464f429631a25c07aa883c18c2c61f7ad1b61219e46eb9d995fc9afb4da->enter($__internal_9926e464f429631a25c07aa883c18c2c61f7ad1b61219e46eb9d995fc9afb4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2d66743888bb7dcd44aceb9c571a8b83ddcd9a45b927400507888fa7bec33aa5->leave($__internal_2d66743888bb7dcd44aceb9c571a8b83ddcd9a45b927400507888fa7bec33aa5_prof);

        
        $__internal_9926e464f429631a25c07aa883c18c2c61f7ad1b61219e46eb9d995fc9afb4da->leave($__internal_9926e464f429631a25c07aa883c18c2c61f7ad1b61219e46eb9d995fc9afb4da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
